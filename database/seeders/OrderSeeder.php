<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'status' => 'Completed',
                'order_datum' => now()->subDays(5)->toDateString(),
                'user_id' => 1,
                'dish_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Completed',
                'order_datum' => now()->subDays(3)->toDateString(),
                'user_id' => 2,
                'dish_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Pending',
                'order_datum' => now()->toDateString(),
                'user_id' => 1,
                'dish_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'In Progress',
                'order_datum' => now()->toDateString(),
                'user_id' => 2,
                'dish_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Completed',
                'order_datum' => now()->subDays(1)->toDateString(),
                'user_id' => 3,
                'dish_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('orders')->insert($orders);
    }
}
