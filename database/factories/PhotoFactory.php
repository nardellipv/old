<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'photo' => $faker->imageUrl(),
        'user_id' => rand('1','20'),
    ];
});
