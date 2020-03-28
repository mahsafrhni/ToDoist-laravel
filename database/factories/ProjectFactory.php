<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $data = [0, 1];
    $data[rand(1)];
    return [
        'name' => $faker->word,
        'about' => $faker->text,
        'status' => $faker->boolean($data),
        'color' => $faker->colorName,
    ];
});
