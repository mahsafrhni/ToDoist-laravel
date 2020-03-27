<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'color' => $faker->colorName,
        'project_id' => factory('App\Project')->create()->id,
    ];
});
