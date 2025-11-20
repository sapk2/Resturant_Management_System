<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'table_id',
        'user_id',
        'status',
        'total_amount' 
    ];
    public function table(){
        return $this->belongsTo(Table::class);
    }
// Optional: scope to get only waiter orders
    public function scopeWaiter($query)
    {
        return $query->whereHas('user', fn($q) => $q->where('role', 'waiter'));
    }

    public function user()  // or name it "waiter()" if you prefer
    {
        return $this->belongsTo(User::class, 'user_id');
        // Laravel already assumes this by default → you can even delete the second argument
    }
}
