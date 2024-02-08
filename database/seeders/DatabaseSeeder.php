<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Dish;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Customer::factory()->count(20)->create();
        Employee::factory()->count(20)->create();
        Order::factory()->count(20)->create();
        Dish::factory()->count(10)->create();
        Category::factory()->count(10)->create();

        $dishes = Dish::all();

        Order::all()->each(function ($order) use ($dishes) {
            $order->dishes()->attach(
                $dishes->random(rand(1, 4))->pluck('id')->toArray()
            );
        });

        $categories = Category::all();

        Dish::all()->each(function ($dish) use ($categories) {
            $dish->categories()->attach(
                $categories->random(rand(1, 4))->pluck('id')->toArray()
            );
        });
    }
}
