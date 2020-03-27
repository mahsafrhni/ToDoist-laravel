<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'text' => $faker->text,
    ];
});
