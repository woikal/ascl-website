<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{

    public function run()
    {
        Address::factory(15)->create();
    }
}
