<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'point'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}