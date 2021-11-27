<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SenderMail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'active'
    ];
}
