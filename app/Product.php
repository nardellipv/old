<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'offer', 'point', 'available'
    ];

    public function Point()
    {
        return $this->hasMany(Point::class);
    }
    
}
