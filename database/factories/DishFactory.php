<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = ['Пеперонни', 'Маргарита', 'Четыре сыра', 'Римская пицца'];
        return [
            'name' => $names[array_rand($names)],
            'description' => fake()->paragraph(4),
            'price' => rand(20, 40)
        ];
    }
}
