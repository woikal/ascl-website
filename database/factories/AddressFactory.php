<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    public function definition()
    {
        return [
            'addressable_type' => '',
            'addressable_id'   => 0,
            'address'          => $this->faker->address,
            'zipcode'          => $this->faker->numberBetween(1001, 9999),
            'city'             => $this->faker->city,
            'country'          => $this->faker->country,
            'latitude'         => $this->faker->latitude,
            'longitude'        => $this->faker->longitude,
            'route'            => $this->faker->text,
        ];
    }
}
