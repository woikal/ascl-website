<?php

namespace Database\Factories;

use App\Models\Membership;
use App\Models\RoleType;
use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    public function definition(): array
    {
        $type = collect(RoleType::all())->random();
        $end  = $this->faker->dateTime()->setTime(0, 0, 0, 0);

        return [
            'membership_id'  => Membership::inRandomOrder()->first('id'),
            'title'          => $type,
            'is_boardmember' => $type !== 'other',
            'comment'        => $this->faker->text(50),
            'start_at'       => $end->sub(new DateInterval('1 year')),
            'end_at'         => $end,
        ];
    }
}
