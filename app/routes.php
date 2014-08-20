<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Public facing routes
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('/subscribe', array('as' => 'subscribe', 'uses' => 'SubscriptionController@subscribe'));

Route::post('/subscribe-fire', array('as' => 'subscribe.fire', 'uses' => 'SubscriptionController@fire'));

Route::resource('post', 'PostsController',
	array('only' => array('index', 'show')));

Route::resource('type', 'TypesController',
	array('only' => array('index', 'show')));

Route::get('/feed', array('as' => 'feed', 'uses' => 'FeedController@index'));

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All routes require basic authentication
|
*/

Route::group(array('before' => 'auth.basic'), function()
{
	Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'HomeController@dashboard'));
	
	Route::resource('post', 'PostsController', array('only' => array('create', 'update', 'edit', 'destroy')));

	Route::group(array('prefix'=>'post'), function(){
		Route::match(array('PUT', 'PATCH'), '/{id}/publish', array('as' => 'post.publish', 'uses' => 'PostsController@publish'));

		Route::get('/{id}/preview', array('as' => 'post.preview', 'uses' => 'PostsController@preview'));
	});

});