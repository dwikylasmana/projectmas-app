<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> mt_rand(1,20),
            'name'=> $this->faker->name(),
            'nik' => $this->faker->nik(),
            'scan_ktp' => $this->faker->sentence(mt_rand(1,4)),
            'scan_kk'=> $this->faker->sentence(mt_rand(1,4)),
            'telp'=> $this->faker->numberBetween($min = 1000000, $max = 9000000),
            'negara'=> $this->faker->country(),
            'provinsi' => $this->faker->city(),
            'alamat' => $this->faker->address(),
            'npwp'=> $this->faker->numberBetween($min = 500000, $max = 900000),
            'scan_npwp'=> $this->faker->sentence(mt_rand(1,4)),
            'no_sppkp'=> $this->faker->numberBetween($min = 500000, $max = 900000),
            'scan_sppkp'=>$this->faker->sentence(mt_rand(1,4)),
        ];
    }
}
