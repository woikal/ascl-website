<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('forename')->nullable();
            $table->string('surname')->nullable();
            $table->date('birthday');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->decimal('latitude', 12, 9)->nullable();
            $table->decimal('longitude', 12, 9)->nullable();
        });


        User::firstOrCreate(['name' => 'system'], [
            'email'             => env('APP_DEFAULT_EMAIL', 'admin@example.com'),
            'password'          => env('APP_DEFAULT_PASSWORD', 'passw0rd'),
            'email_verified_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('forename');
            $table->dropColumn('surname');
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('zipcode');
            $table->dropColumn('city');
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
}
