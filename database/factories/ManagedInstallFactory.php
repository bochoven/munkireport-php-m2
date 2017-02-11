<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(MrModule\ManagedInstalls\ManagedInstall::class, function (Faker\Generator $faker) {
    return [
        'serial_number' => $faker->unique()->regexify('[A-Z0-9]{12}'),
        'name' => $faker->words,
        'display_name' => $faker->words,
        'version' => $faker->numerify('#.#.#') ,
        'size' => $faker->numberBetween(1000000, 10000000),
        'installed' => $faker->numberBetween(1000000, 10000000),
        'status' => $faker->words,
        'type' => $faker->word
    ];
});