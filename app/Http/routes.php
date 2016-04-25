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
Route::get('', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Topics/Replies
Route::get('topic/{id}', 'TopicsController@view');
Route::get('topic/create', 'TopicsController@create');
Route::post('topic/create', 'TopicsController@create');
Route::post('reply/create', 'RepliesController@create');
    
// User Profile
Route::get('user/{username}', 'UsersController@getProfile');
Route::get('user/{username}/topics', 'UsersController@getUserTopics');
Route::get('user/{username}/replies', 'UsersController@getUserReplies');

Route::auth();