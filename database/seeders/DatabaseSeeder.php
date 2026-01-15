<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 5 users
        \App\Models\User::factory(5)->create();

        // Run all seeders
        $this->call([
            CategorySeeder::class,
            IngredientSeeder::class,
            DishSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
