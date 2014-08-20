<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('/subscribe', array('as' => 'subscribe', 'uses' => 'SubscriptionController@subscribe'));

Route::post('/subscribe-fire', array('as' => 'subscribe.fire', 'uses' => 'SubscriptionController@fire'));

Route::resource('post', 'PostsController',
	array('only' => array('index', 'show')));

Route::resource('type', 'TypesController',
	array('only' => array('index', 'show')));

Route::resource('tag', 'TagsController',
	array('only' => array('index', 'show')));

Route::resource('author', 'AuthorsController',
	array('only' => array('index', 'show')));

Route::get('/feed', array('as' => 'feed', 'uses' => 'FeedController@index'));

Route::group(array('before' => 'auth.basic'), function()
{
	Route::resource('post', 'PostsController', array('only' => array('create', 'update', 'edit')));

	Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'HomeController@dashboard'));

	Route::match(array('PUT', 'PATCH'), '/publish/{post}', array('as' => 'post.publish', 'uses' => 'PostsController@publish'));

	Route::get('/preview/{post}', array('as' => 'post.preview', 'uses' => 'PostsController@preview'));

});