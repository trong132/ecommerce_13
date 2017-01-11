<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'id',
        'date',
        'total',
        'status',
        'user_id',
    ];
    public function order_details()
    {
        return $this->hasMany(Order_Detail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
