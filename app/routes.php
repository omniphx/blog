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

use Faker\Factory as Faker;

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('/about', array('as' => 'about', 'uses' => 'HomeController@about'));
Route::get('/services', array('as' => 'services', 'uses' => 'HomeController@services'));
Route::get('/contact', array('as' => 'contact', 'uses' => 'HomeController@contact'));

Route::resource('post', 'PostsController',
	array('only' => array('index', 'show')));

Route::resource('type', 'TypesController',
	array('only' => array('index', 'show')));

Route::resource('tag', 'TagsController',
	array('only' => array('index', 'show')));

Route::resource('author', 'AuthorsController',
	array('only' => array('index', 'show')));

Route::get('/feed', array('as' => 'feed', 'uses' => 'RssController@index'));

Route::post('/subscribe', array('as' => 'subscribe', 'uses' => 'HomeController@subscribe'));

Route::get('/createPost', function()
{
	return Post::create([
		'title'=>'Cloud computing',
		'body'=>'Cloud computing is the future.',
		'author_id'=>1,
		'published'=>0]);
});

Route::get('/test', function(){

	return Link_to_route('user', 'Test');
});

Route::group(array('prefix' => 'admin'), function()
{
    Route::get('/unpublished', array(
    	'as' => 'unpublished',
    	'uses' => 'AdminController@unpublished'));
});

Route::group(array('before' => 'auth.basic'), function()
{
	Route::resource('post', 'PostsController',
	array('only' => array('update', 'edit')));
});