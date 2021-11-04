<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(['male','female']),
            'address'=>$this->faker->address(),
            'contact_number'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'ban'=>false
        ];
    }
}
