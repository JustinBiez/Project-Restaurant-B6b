<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'dish_id',
        'aantal',
        'opmerkingen',
    ];

    /**
     * Get the order that owns this item.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the dish for this order item.
     */
    public function dish()
    {
        return $this->belongsTo(Dishes::class);
    }
}
