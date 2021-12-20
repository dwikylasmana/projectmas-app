<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengajuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'   => mt_rand(1,20),
            'file1'     => $this->faker->numberBetween($min = 1000000, $max = 9000000),
            'file2'     => $this->faker->numberBetween($min = 1000000, $max = 9000000),
            'file3'     => $this->faker->numberBetween($min = 1000000, $max = 9000000),
            'content'   => $this->faker->sentence(mt_rand(10,30)),        
        ];
    }
}
