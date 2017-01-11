<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name',
        'description',
        'parent_id',
    ];

    public function books()
    {
        return $this->hasMany(Product::class);
    }
}
