<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    $seen = $faker->boolean($chanceOfGettingTrue = 50);
    $answered;
    if($seen){
        $answered = $faker->boolean($chanceOfGettingTrue = 50);
    }
    else{
        $answered = false;
    }
    return [
        'name' => $faker->firstName,
        'body' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'email' => $faker->email,
        'answered' =>$answered,
        'seen' => $seen
        
    ];
});
