<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Point;
use Faker\Generator as Faker;

$factory->define(Point::class, function (Faker $faker) {
    return [
        'user_id' => rand('1','20'),
        'product_id' => rand('1','5'),
        'point' => $faker->numberBetween($min = 100, $max = 12000),
        'code' => rand('1000','9999'),
        'exchange' => $faker->randomElement(['Si', 'No']),
        'date_exchange' => $faker->dateTimeBetween('-1 year', 'now'),
    ];
});
