<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StroresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_siret'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'store_name'=>$this->faker->company,
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'street'=>$this->faker->streetName,
            'city_name'=>$this->faker->city
        ];
    }
}
