<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = [
        'order_id',
        'total_amount',
        'payment_type',
        'payment_status',
        'paid_at'
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
