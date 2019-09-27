<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visitor;
use Faker\Generator as Faker;

$factory->define(Visitor::class, function (Faker $faker) {
    return [
       
            'name' => $faker->name('male'|'female'),
            'email' => $faker->safeEmail,
            'address' => $faker->address,
            'city' => $faker->city,
            'country' => $faker->country

    ];
});
