<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Car::class, function (Faker $faker) {
    $gearTypes = ['automatic', 'gear'];
    $fuel = ['solar', 'benzene'];
    return [
        'car_model_id' => rand(2,4),
        'car_model_parent_id' => 1,
        'model_year' => rand(1990, 2019),
        'gear_type' => $gearTypes[rand(0,1)],
        'fuel' => $fuel[rand(0,1)],
        'engine_size' => rand(1000, 3500),
        'engine_power' => rand(50,350),
        'distance' => rand(0,9000),
        'price' => rand(60000, 300000),
        'passenger_number' => rand(2,7),
        'previous_holders_number' => rand(0,3),
        'color' => $faker->colorName,
    ];
});
