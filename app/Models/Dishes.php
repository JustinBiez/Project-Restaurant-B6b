<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    protected $table = 'dishes';

    protected $fillable = [
        'naam',
        'beschrijving',
        'prijs',
        'category_id',
    ];

    /**
     * Get the category for this dish.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the ingredients for this dish.
     */
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'dish_ingredient', 'dish_id', 'ingredient_id');
    }

    /**
     * Get the order items for this dish.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'dish_id');
    }
}
