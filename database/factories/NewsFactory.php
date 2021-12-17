<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(mt_rand(3,9)),
            'slug'=> $this->faker->slug(),
            'user_id'=> mt_rand(1,5),
            'category_id' => mt_rand(1,3),
            'intro'=> $this->faker->sentence(mt_rand(10,30)),
            'content'=> $this->faker->paragraph(mt_rand(1,6))
        ];
    }
}
