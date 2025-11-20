<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = [
            'order_id',
            'dishes_id',
            'quantity',
            'price',
            'subtotal'
    ];
    public function Order(){
        return $this->belongsTo(Order::class);
    }
    public function dishes(){
        return $this->hasMany(Dishes::class);
    }
}
