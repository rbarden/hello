<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Rbarden\Hello\Models\Submission;
use Faker\Generator as Faker;

$factory->define(Submission::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'message' => $faker->paragraph
    ];
});
