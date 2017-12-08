<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Users\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'            => 'Jorge',
        'lastname'        => 'Dzul',
        'email'           => 'prueba@gmail.com',
        'password'        => $password ?: $password = bcrypt('adminadmin'),
        'remember_token'  => str_random(10),
        'created_by'      => 0,
        'updated_by'      => 0,
        'role_id'         => 2
    ];
});

$factory->define(App\Models\Users\UserStat::class, function (Faker\Generator $faker) {
    return [
        'user_id'   => 1,
        'ip'        => $faker->ipv4,
        'isocode'   => $faker->swiftBicNumber,
        'country'   => $faker->country,
        'city'      => $faker->city,
        'state'     => $faker->state,
        'zip_code'  => $faker->postcode,
        'lat'       => $faker->latitude,
        'lon'       => $faker->longitude,
        'timezone'  => $faker->timezone,
        'default'   => $faker->boolean,
    ];
});

$factory->define(App\Models\Roles\Role::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->name,
        'label' => $faker->name
    ];
});
