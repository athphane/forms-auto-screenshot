<?php

namespace Javaabu\Forms\Tests\TestSupport\Models;

class ActivityFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{
    protected $model = Activity::class;

    public function definition(): array
    {
        return [
            'date_a' => $this->faker->date,
            'date_b' => $this->faker->date,
            'date_c' => $this->faker->dateTime,
            'date_d' => $this->faker->date,
            'date_e' => $this->faker->dateTime,
        ];
    }
}
