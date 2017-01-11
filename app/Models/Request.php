<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';

    protected $fillable = [
        'id',
        'date',
        'detail',
        'status',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
