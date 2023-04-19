<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('external_link')->nullable();
            $table->string('max_players')->nullable();
            $table->string('address');
            $table->integer('zipcode');
            $table->string('city');
            $table->string('country');
            $table->decimal('longitude', 12, 3);
            $table->decimal('latitude', 12, 3);
            $table->boolean('hidden')->default(false);
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('location_id')->constrained();
            $table->enum('visibility', ['hidden', 'internal', 'public', 'removed']);
            $table->enum('status', ['draft', 'published', 'closed']);
            $table->string('name');
            $table->string('description');
            $table->dateTime('registration_start_at')->nullable();
            $table->dateTime('registration_end_at')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->integer('max_players')->nullable();
        });

        Schema::create('event_user', function (Blueprint $table) {
            $table->foreignId('event_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->dateTime('edited_at')->nullable();
            $table->string('action');
        });

        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('player_id')->nullable()->constrained();
            $table->foreignId('registered_by_id')->nullable()->constrained('users');
            $table->enum('status', ['requested', 'confirmed', 'canceled']);
            $table->string('forename');
            $table->string('surname');
            $table->string('nickname');
            $table->string('club');
            $table->string('email');
            $table->date('birthday');
            $table->string('equipment');
            $table->boolean('rent_equipment');
            $table->multiLineString('comment');
            $table->string('token', 32);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
        Schema::dropIfExists('events');
        Schema::dropIfExists('locations');
    }
}
