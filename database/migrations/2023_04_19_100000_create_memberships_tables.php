<?php

use App\Models\MembershipType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->enum('type', MembershipType::all())->nullable();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('membership_id')->constrained();
            $table->string('title');
            $table->boolean('is_boardmember')->default(true);
            $table->string('comment')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('memberships');
    }
}
