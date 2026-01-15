<?php

namespace Database\Seeders;

use App\Models\Dishes;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'naam' => 'Grilled Chicken Breast',
                'beschrijving' => 'Juicy grilled chicken breast with herbs',
                'prijs' => 12.99,
                'category_id' => 1,
                'ingredients' => [9],
            ],
            [
                'naam' => 'Tomato Pasta',
                'beschrijving' => 'Fresh pasta with homemade tomato sauce',
                'prijs' => 10.50,
                'category_id' => 1,
                'ingredients' => [1, 2, 8],
            ],
            [
                'naam' => 'French Fries',
                'beschrijving' => 'Crispy golden fries',
                'prijs' => 3.99,
                'category_id' => 2,
                'ingredients' => [10],
            ],
            [
                'naam' => 'Caesar Salad',
                'beschrijving' => 'Fresh salad with parmesan and croutons',
                'prijs' => 8.99,
                'category_id' => 2,
                'ingredients' => [1, 8],
            ],
            [
                'naam' => 'Chocolate Cake',
                'beschrijving' => 'Rich chocolate cake with frosting',
                'prijs' => 6.99,
                'category_id' => 3,
                'ingredients' => [2, 4, 5, 6],
            ],
            [
                'naam' => 'Strawberry Cheesecake',
                'beschrijving' => 'Creamy cheesecake with fresh strawberries',
                'prijs' => 7.99,
                'category_id' => 3,
                'ingredients' => [5, 8],
            ],
            [
                'naam' => 'Iced Tea',
                'beschrijving' => 'Refreshing iced tea',
                'prijs' => 2.50,
                'category_id' => 4,
                'ingredients' => [],
            ],
            [
                'naam' => 'Orange Juice',
                'beschrijving' => 'Freshly squeezed orange juice',
                'prijs' => 3.50,
                'category_id' => 4,
                'ingredients' => [],
            ],
        ];

        foreach ($dishes as $dishData) {
            $ingredients = $dishData['ingredients'];
            unset($dishData['ingredients']);
            
            $dish = Dishes::create($dishData);
            $dish->ingredients()->attach($ingredients);
        }
    }
}
