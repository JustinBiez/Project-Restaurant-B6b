<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = [
        'naam',
        'allergenen',
    ];

    /**
     * Get the dishes that have this ingredient.
     */
    public function dishes()
    {
        return $this->belongsToMany(Dishes::class, 'dish_ingredient', 'ingredient_id', 'dish_id');
    }
}
