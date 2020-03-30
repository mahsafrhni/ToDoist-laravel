<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $user_id = rand(1, 40);
    return [
        'name' => $faker->word,
        'user_id' => $user_id,
        'bio' => $faker->text(60),
    ];
});
