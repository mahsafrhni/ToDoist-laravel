<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $data = [0, 1];
    $faker->locale('fa_IR');
    srand(1);
    return [
        'name' => $faker->word,
        'about' => $faker->text,
        'status' => $data[rand(0,1)],
        'color' => $faker->colorName,
    ];
});
