<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'table_id',
        'customer_name',
        'phone',
        'reserved_for',
        'status'
    ];
    public function table(){
        return $this->belongsTo(Table::class);
    }
}
