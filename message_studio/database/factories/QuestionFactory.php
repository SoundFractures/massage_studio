<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    $seen = $faker->boolean($chanceOfGettingTrue = 50);
    $answered;
    $answer ="";

    if($seen){
        $answered = $faker->boolean($chanceOfGettingTrue = 50);
        $answered ? $answer = $faker->paragraph($nbSentences = 3, $variableNbSentences = true) : null ;
    }
    else{
        $answered = false;
    }
    
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'body' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'answer' =>$answer,
        'email' => $faker->email,
        'answered' =>$answered,
        
        'seen' => $seen
        
    ];
});
