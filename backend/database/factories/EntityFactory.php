<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entity;
use Faker\Generator as Faker;

$factory->define(Entity::class, function (Faker $faker) {
    return [
        'name'        => $faker->company,
        'type'        => $faker->word,
        'description' => $faker->text(rand(10, 500)),
        'email'       => $faker->safeEmail,
        'phone'       => $faker->phoneNumber,
        'url'         => $faker->url,
        'address'     => $faker->address,
        'country'     => $faker->countryCode,
        'city'        => $faker->city,
        'latitude'    => $faker->latitude,
        'longitude'   => $faker->longitude,
    ];
});
