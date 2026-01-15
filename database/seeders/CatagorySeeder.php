<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Appetizers', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Main Courses', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Side Dishes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Desserts', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beverages', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('catagories')->insert($categories);
    }
}
