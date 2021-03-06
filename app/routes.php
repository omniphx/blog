<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All routes require basic authentication
|
*/

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('session', 'SessionsController', array('only' => 'store'));

Route::group(array('before' => 'auth'), function()
{
	Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'HomeController@dashboard'));
	
	Route::resource('post', 'PostsController', array('only' => array('create', 'update', 'edit', 'store', 'destroy')));

	Route::group(array('prefix'=>'post'), function(){
		Route::match(array('PUT', 'PATCH'), '/{id}/publish', array('as' => 'post.publish', 'uses' => 'PostsController@publish'));

		Route::get('/{id}/preview', array('as' => 'post.preview', 'uses' => 'PostsController@preview'));
	});

	Route::resource('author', 'AuthorsController', array('only' => array('create', 'update', 'store', 'destroy', 'show')));

	Route::resource('type', 'TypesController', array('only' => array('create', 'update', 'store', 'destroy')));

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Public routes
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

Route::get('/resume/', array('as' => 'subscribe', 'uses' => 'SubscriptionController@subscribe'));

Route::get('resumes/matthew-mitchener-go-ahead-tours', function(){
	return View::make('resumes.matthew-mitchener-go-ahead-tours');
});

Route::get('test', function(){
	return StringHelper::upperCase('hello');
});