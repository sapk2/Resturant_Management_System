<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventories extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'unit',
        'low_stock_alert'
    ];
}
