<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CombinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'profesion' => $this->faker->jobTitle()
        ];
    }
}
