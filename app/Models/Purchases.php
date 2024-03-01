<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable = [
        'user_id', 'name', 'withdrawn',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
