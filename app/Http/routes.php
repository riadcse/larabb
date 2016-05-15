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

/**
 * ForumController GET
 */
Route::get('/', 'ForumController@index');
Route::get('home', 'ForumController@index');

/**
 * BoardsController GET
 */
Route::get('board/{id}', 'BoardsController@show');

/**
 * TopicsController GET
 */
Route::get('board/{id}/create', 'TopicsController@create');
Route::get('topic/{id}/edit', 'TopicsController@edit');
Route::get('topic/{id}/reply', 'RepliesController@create');
Route::get('topic/{id}/report', 'TopicsController@report');
Route::get('topic/{id}/ignore', 'TopicsController@ignore');
Route::get('topic/{id}/subscribe', 'TopicsController@subscribe');

/**
 * TopicsController POST
 */
Route::post('board/{id}/create', 'TopicsController@store');
Route::post('topic/{id}/edit', 'TopicsController@store');
Route::post('topic/{id}/reply', 'RepliesController@store');

/**
 * TopicsController GET
 * This is here because reasons
 */
Route::get('topic/{id}', 'TopicsController@show');

/**
 * UsersController GET
 */
Route::get('profile/{id}', 'UsersController@show');
