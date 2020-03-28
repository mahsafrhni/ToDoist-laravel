<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    $project_id = rand(1, 20);
    return [
        'name' => $faker->word,
        'color' => $faker->colorName,
        'project_id' => $faker->$project_id,
    ];
});
