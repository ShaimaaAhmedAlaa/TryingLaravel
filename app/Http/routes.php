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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/TryFunction', function () {
		return "You tried the anonymous function in this page";
	});

Route::get('/about', 'AboutController@about');

Route::get('/pages', ' PagesController@pages');

Route::get('/contact', 'PagesController@contact');

// Route::get('/articles', 'ArticlesController');
// Route::get('/articles/edit', 'ArticlesController@edit');
// Route::get('/articles/create', 'ArticlesController@create');
// Route::get('/articles/show', 'ArticlesController@show');
// Route::get('/articles/index', 'ArticlesController@index');

// instead of what i wrote up i can make all of that in one route
//because all of it is a full model
Route::resource('/articles', 'ArticlesController');

Route::controllers([
		'auth'     => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
