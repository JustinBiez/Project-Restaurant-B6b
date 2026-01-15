<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'naam' => 'Grilled Chicken',
                'beschrijving' => 'Delicious grilled chicken breast with herbs',
                'prijs' => 12.99,
                'catagorie' => 'Main Courses',
                'ingredienten' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naam' => 'Margherita Pizza',
                'beschrijving' => 'Classic pizza with tomato, mozzarella, and basil',
                'prijs' => 10.99,
                'catagorie' => 'Main Courses',
                'ingredienten' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naam' => 'Garlic Pasta',
                'beschrijving' => 'Creamy pasta with fresh garlic and olive oil',
                'prijs' => 9.99,
                'catagorie' => 'Main Courses',
                'ingredienten' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naam' => 'Grilled Salmon',
                'beschrijving' => 'Fresh salmon fillet with lemon butter sauce',
                'prijs' => 15.99,
                'catagorie' => 'Main Courses',
                'ingredienten' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naam' => 'Beef Steak',
                'beschrijving' => 'Premium beef steak cooked to perfection',
                'prijs' => 18.99,
                'catagorie' => 'Main Courses',
                'ingredienten' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('gerechten')->insert($dishes);
    }
}
