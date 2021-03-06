<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Submission;
use Faker\Generator as Faker;

$factory->define(Submission::class, function (Faker $faker) {
    return [
        'first_name'    =>  $faker->firstName,
        'last_name'     =>  $faker->lastName,
        'company_name'   =>  $faker->company,
        'email'         =>  $faker->unique()->safeEmail,
        'language_id'      =>  $faker->numberBetween(1,30),
        'country_id'       =>  $faker->numberBetween(1,30),
        'title_id'         =>  $faker->numberBetween(1,5)
    ];
});
