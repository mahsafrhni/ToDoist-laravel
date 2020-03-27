<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'about' => $faker->text,
        'status' => $faker->randomKey(['active', 'deactive']),
        'color' => $faker->colorName,
    ];
});
