<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['Woodland', 'Urban', 'Hills', 'CQB', 'Industrial', 'Artificial Arena']);

        return [

                'name'          => $type,
                'description'   => $this->faker->realText,
                'external_link' => $this->faker->url,
                'max_players'   => $this->faker->numberBetween(1,5)*5+5,
            'hidden'        => false,
        ];
    }
}
