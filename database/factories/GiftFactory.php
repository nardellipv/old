<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gift;
use Faker\Generator as Faker;

$factory->define(Gift::class, function (Faker $faker) {
    return [
        'price' => $faker->numberBetween('100','2000'),
        'pay' => $faker->randomElement(['Y','N']),
        'user_id' => rand('1','20'),
    ];
});
