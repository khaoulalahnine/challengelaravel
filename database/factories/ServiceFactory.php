<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
           'title' => fake()->words(2, true),
            'description' => fake()->sentence(8),
            'duration' => fake()->numberBetween(30, 180),
            'price' => fake()->randomFloat(2, 50, 500),
            'image' => null, 
        ];
    }
}
