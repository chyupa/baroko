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

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix'=>'admin'), function(){
	Route::get('login', array('as'=>'admin.get.login', 'uses'=>'AdminController@getLogin'));
	Route::post('login', array('as'=>'admin.post.login', 'uses' => 'AdminController@postLogin'));
	Route::get('logout', array('as'=>'admin.get.logout', 'uses'=> 'AdminController@getLogout'));
});
Route::group(array('prefix'=>'admin', 'before'=>'auth'), function(){
	Route::get('dashboard', array('as'=>'admin.get.dashboard', 'uses'=>'AdminController@getDashboard'));
	Route::resource('products','ProductsController');
	Route::resource('categories', 'CategoriesController');
	Route::resource('subcategories', 'SubcategoriesController');
	Route::resource('gallery', 'GalleryController', ['only'=>'destroy']);
	Route::resource('posts', 'PostsController');
});