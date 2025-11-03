<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'service_id' => Service::inRandomOrder()->first()->id,
            'date' => fake()->dateTimeBetween('now', '+2 months')->format('Y-m-d'),
            'time' => fake()->time('H:i:s'),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
