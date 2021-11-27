<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'offer', 'point', 'point_changed', 'exchange'
    ];

    public function Point()
    {
        return $this->hasMany(Point::class);
    }

    public function Sale()
    {
        return $this->hasMany(Sale::class);
    }
}
