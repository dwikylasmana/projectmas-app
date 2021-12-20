<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'   => mt_rand(1,5),
            'date'      => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'time'      => $this->faker->time($format = 'H:i', $max = 'now'),
            'lokasi'    => $this->faker->city(),
            'note'      => $this->faker->sentence(mt_rand(3,9))
        ];
    }
}
