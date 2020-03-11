<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'body' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'file' => $faker->word,
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
    ];
});
