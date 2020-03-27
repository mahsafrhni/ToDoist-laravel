<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'user_id' => factory('App\User')->create()->id,
        'bio' => $faker->text(60),
        'start' => $faker->date('%Y-%m-%d', 'None'),
        'finish' => $faker->date('%Y-%m-%d', 'None'),
    ];
});
