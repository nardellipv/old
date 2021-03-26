<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'price' => $faker->numberBetween($min = 100, $max = 2000),
        'offer' => $faker->numberBetween($min = 100, $max = 2000),
        'point' => $faker->numberBetween($min = 100, $max = 1000),
        'point_changed' => $faker->numberBetween($min = 1000, $max = 3000),
        'show' => $faker->randomElement(['Y','N']),
    ];
});
