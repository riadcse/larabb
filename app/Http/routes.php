<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home Page
Route::get('/', 'HomeController@index');

// User Authentication/Registration
Route::get('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('register', 'AuthController@register');
Route::get('confirm-email/{confirmation_code}', 'AuthController@confirmEmail');

// User Profile
Route::get('user/{username}', 'UsersController@getProfile');
Route::get('user/{username}/topics', 'UsersController@getUserTopics');
Route::get('user/{username}/replies', 'UsersController@getUserReplies');


Route::auth();

Route::get('/home', 'HomeController@index');
