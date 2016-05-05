<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <hello@jasonclemons.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * that was distributed with this source code.
 */

Route::auth();

Route::get('/', 'ForumController@index');
Route::get('home', 'ForumController@index');

Route::get('board/{id}', 'BoardsController@show');

Route::get('topic/{id}', 'TopicsController@show');
Route::get('board/{board_id}/newtopic', 'TopicsController@create');
Route::post('board/{board_id}/newtopic', 'TopicsController@store');
Route::get('topic/{id}/edit', 'TopicsController@edit');
Route::post('topic/{id}/edit', 'TopicsController@store');

Route::get('user/{id}', 'UsersController@show');
