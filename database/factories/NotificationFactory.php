<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notification;
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'text' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'date' => $faker->date($format = 'Y-m-d', $max = '+10days'),
    ];
});
