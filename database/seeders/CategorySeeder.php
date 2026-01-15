<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'naam' => 'Main Courses',
            'type' => 'main',
        ]);

        Category::create([
            'naam' => 'Side Dishes',
            'type' => 'side',
        ]);

        Category::create([
            'naam' => 'Desserts',
            'type' => 'dessert',
        ]);

        Category::create([
            'naam' => 'Beverages',
            'type' => 'drink',
        ]);
    }
}
