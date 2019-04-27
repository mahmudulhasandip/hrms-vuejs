<?php

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

// $factory->define(App\Employee::class, function (Faker $faker) {
//     $gender = $faker->randomElement(['male', 'female']);
//     $marital_status = $faker->randomElement(['married', 'unmarried']);
//     return [
//         'fname' => $faker->name,
//         'lname' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'gender' => $gender,
//         'date_of_birth' => $faker->dateTimeBetween('-30 years', 'now'),
//         'current_address' => $faker->address,
//         'permanent_address' => $faker->address,
//         'city' => $faker->city,
//         'country' => $faker->country,
//         'nationality' => 'Bangladeshi',
//         'nid' => $faker->randomDigit,
//         'phone' => $faker->phoneNumber,
//         'role_id' => 3,
//         'marital_status' => $marital_status,
//         'father_name' => $faker->name,
//         'mother_name' => $faker->name,
//         'linkedin' => $faker->url,
//         'dp' => $faker->url,
//         'salary' => $faker->randomDigit,
//         'leave' => 12,
//         'remember_token' => str_random(10),
//     ];
// });
