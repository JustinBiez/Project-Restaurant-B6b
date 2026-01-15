<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'naam',
        'type',
    ];

    /**
     * Get the dishes for this category.
     */
    public function dishes()
    {
        return $this->hasMany(Dishes::class);
    }
}
