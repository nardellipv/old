<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    return [
        'user_id' => rand('1','20'),
        'product_id' => rand('1','5'),
        'price' => rand('100','2000'),
        'created_at' => $faker->dateTimeBetween('-3 year', 'now'),
    ];
});
