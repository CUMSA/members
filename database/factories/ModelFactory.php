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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Member::class, function (Faker\Generator $faker) {
    return [
        'last_name' => 'Tan',
        'first_name' => 'Han Liang',
        'gender' => 'Male',
        'date_of_birth' => '2000-12-12',
        'nationality' => 'Guatemalan',
        'is_singapore_pr' => '1',
        'nric' => 'S9411885I',
        'crsid' => 'hlt38',
        'email_hermes' => 'hlt38@cam.ac.uk',
        'email_other' => $faker->email(),
        'mobile_uk' => $faker->phoneNumber,
        'mobile_home' => $faker->phoneNumber,
        'address_home' => $faker->realText(),
        'address_uk' => $faker->realText(),
        'release_info' => 1,
        'start_year' => 2012,
        'end_year' => 2015,
        'registration_time' => '2015-10-10 00:00:00',
        'membership_type' => 'Life',
        'is_fee_paid' => 1,
        'is_card_issued' => 1,
        'remarks' => $faker->realText(),
        'college_id' => 11,
        'scholarship_id' => 11,
        'course_id' => 11,
    ];
});

$factory->define(App\Link::class, function (Faker\Generator $faker) {
    return [
        'member_id' => 1,
    ];
});

$factory->define(App\Internship::class, function (Faker\Generator $faker) {
    return [
        'link_id' => 1,
        'role_name' => str_random(5),
        'related_field' => 'Other',
        'company_name' => 'Test Company',
        'description' => str_random(15),
        'location' => 'Singapore',
        'start_date' => '2012-12',
        'end_date' => '2013-12',
    ];
});