<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(5),
        'author_id' =>App\User::all()->random()->id
    ];
});
