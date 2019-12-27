<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\blogs::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body' => $faker->text(200),
    ];
});
