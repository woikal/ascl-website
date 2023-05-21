<?php

namespace Database\Seeders;

use App\Models\Location;
use Faker\Core\Number;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::factory()->make(5);
    }
}
