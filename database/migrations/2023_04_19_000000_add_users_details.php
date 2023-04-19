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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('alternative_nicknames')->nullable();
            $table->date('birthday');
            $table->string('phone')->nullable();
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
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
        });
    }
}
