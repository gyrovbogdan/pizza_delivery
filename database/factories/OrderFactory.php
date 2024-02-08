<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => rand(1, 20),
            'deliveryman_id' => rand(1, 20),
            'accepted_at' => fake()->dateTime(),
            'delivered_at' => fake()->dateTime()
        ];
    }
}
