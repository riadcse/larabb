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
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->catchPhrase,
        'description' => $faker->text(250)
    ];
});

$factory->define(App\Board::class, function (Faker\Generator $faker) {
    return [
    	'category_id' => rand(1,5),
        'name' => $faker->catchPhrase,
        'description' => $faker->text(250)
    ];
});

$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    return [
    	'board_id' => rand(1,25),
    	'user_id' => rand(1,500),
        'title' => $faker->realText(150),
        'body' => $faker->paragraphs(5, true)
    ];
});

$factory->define(App\Reply::class, function (Faker\Generator $faker) {
    return [
    	'topic_id' => rand(1,5000),
    	'user_id' => rand(1,500),
        'body' => $faker->paragraphs(3, true)
    ];
});