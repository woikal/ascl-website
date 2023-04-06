<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::make([
            'name'     => 'admin',
            'email'    => 'webmaster@ascl.at',
            'password' => 'admin123',
        ]);
    }
}
