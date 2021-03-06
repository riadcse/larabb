<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <jason@larabb.org>
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
Route::get('topic/{id}/delete', 'TopicsController@delete');

/**
 * TopicsController POST
 */
Route::post('board/{id}/create', 'TopicsController@store');
Route::post('topic/{id}/update', 'TopicsController@update');
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
Route::get('profile/settings', 'UsersController@settings');
Route::get('profile/{id}/topics', 'UsersController@showTopics');
Route::get('profile/{id}/replies', 'UsersController@showReplies');
Route::get('members', 'UsersController@index');