<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    
    return [
        
        'title' => $faker->sentence($nbWords = 8),
        'body' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),

        'file' => $faker->image('public/images',400,300, null, false),
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
    ];
});
