<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Thread;
use App\Channel;
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

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'channel_id' => factory(Channel::class),
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
