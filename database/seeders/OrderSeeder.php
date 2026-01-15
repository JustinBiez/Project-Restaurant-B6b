<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $order = Order::create([
                'user_id' => fake()->numberBetween(1, 5),
                'datum' => fake()->dateTimeBetween('-1 month', 'now'),
                'status' => fake()->randomElement(['pending', 'completed', 'cancelled']),
            ]);

            // Add order items
            $dishCount = fake()->numberBetween(1, 3);
            for ($j = 0; $j < $dishCount; $j++) {
                $order->items()->create([
                    'dish_id' => fake()->numberBetween(1, 8),
                    'aantal' => fake()->numberBetween(1, 3),
                    'opmerkingen' => fake()->optional()->sentence(),
                ]);
            }
        }
    }
}
