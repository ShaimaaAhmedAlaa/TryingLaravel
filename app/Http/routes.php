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

Route::controllers([
		'auth'     => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
