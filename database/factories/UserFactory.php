<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'type' =>  $faker->randomElement(['Admin', 'Client']),
        'birthday' =>  $faker->dateTimeBetween('1990-01-01', '2012-12-31'),
        'phone' => $faker->numberBetween('100000','999999'),
        'total_points' => $faker->numberBetween('100','9999'),
        'photo' => $faker->imageUrl(),
        'email_verified_at' => now(),
        'password' => bcrypt('123'),
        'remember_token' => Str::random(10),
    ];
});
