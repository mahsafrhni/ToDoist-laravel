<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $user_id = rand(1, 40);
    return [
        'name' => $faker->word,
        'user_id' => $faker->$user_id,
        'bio' => $faker->text(60),
        'start' => $faker->dateTimeBetween(date(strtotime('-1000 days')), now()),
        'finish' => $faker->dateTimeBetween(now(), date(strtotime('+1000 days'))),
    ];
});
