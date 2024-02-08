<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['deliveryman', 'operator', 'manager'];
        return [
            'phone_number' => fake()->phoneNumber(),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => '12345678',
            'role' => $roles[array_rand($roles)]
        ];
    }
}
