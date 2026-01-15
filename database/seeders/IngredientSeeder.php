<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['naam' => 'Chicken Breast', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Tomato', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Onion', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Garlic', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Olive Oil', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Basil', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Mozzarella', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Beef', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Pasta', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Salmon', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('ingredienten')->insert($ingredients);
    }
}
