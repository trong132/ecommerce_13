<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'price',
        'discount',
        'rate',
        'status',
        'os',
        'color',
        'image',
        'description',
        'display_size',
        'memory',
        'ram',
        'hot',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order_details()
    {
        return $this->hasMany(Order_Detail::class);
    }
}
