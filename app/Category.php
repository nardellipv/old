<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'point'
    ];

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
