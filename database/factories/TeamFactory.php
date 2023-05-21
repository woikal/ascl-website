<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = Str::of($this->faker->words($this->faker->numberBetween(3, 5), true))->title();

        return [
            'name'    => $name . ' (random)',
            'acronym' => $name->replaceMatches('/[^A-Z]*/', ''),
            'zvr'     => $this->faker->numberBetween(100000000, 999999999),
            'show'    => $this->faker->boolean(70),
        ];
    }
}
