<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['naam' => 'Tomato', 'allergenen' => null],
            ['naam' => 'Bread', 'allergenen' => 'gluten'],
            ['naam' => 'Peanut Oil', 'allergenen' => 'pinda'],
            ['naam' => 'Almond Flour', 'allergenen' => 'noten'],
            ['naam' => 'Milk', 'allergenen' => 'melk'],
            ['naam' => 'Egg', 'allergenen' => 'ei'],
            ['naam' => 'Salmon', 'allergenen' => 'vis'],
            ['naam' => 'Cheese', 'allergenen' => 'melk'],
            ['naam' => 'Chicken', 'allergenen' => null],
            ['naam' => 'Rice', 'allergenen' => null],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
