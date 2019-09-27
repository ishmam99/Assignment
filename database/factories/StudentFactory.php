<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'|'female'),
        'father' => $faker->name('male'|'female'),
        'student_id'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'city' => $faker->city,
        'country' => $faker->country

        //
    ];
});
