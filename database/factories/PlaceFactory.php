<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
    ];
});