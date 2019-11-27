<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PersonTitle;
use Faker\Generator as Faker;

$factory->define(PersonTitle::class, function (Faker $faker) {
    return [
        'person_title'=>$faker->unique()->randomElements(['Dr.','Prof.','Mr.','Mrs.','Ms.','Mx.'])[0]
    ];
});
