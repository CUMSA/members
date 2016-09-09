<?php

use Carbon\Carbon;

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

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1,9),
        'name' => $faker->name,
        'datetime_start' => Carbon::now(),
        'datetime_end' => Carbon::now(),
        'description' => $faker->sentence(10),
        'location' => 'Singapore',
        'comments' => 'This is a test event',
    ];
});

$factory->define(App\EventAttendee::class, function (Faker\Generator $faker) {
    return [
        'id' => 1,
        'event_id' => $faker->unique()->randomDigitNotNull(1,8),
        'time_admitted' => Carbon::now(),
        'comments' => 'This is a test attendee',
        'crsid' => 'hlt38',
    ];
});
