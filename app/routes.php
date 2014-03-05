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

/*Route::get('/', function()
{
	return View::make('login');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('recuperar', function()
{
	return View::make('recovery');
});

Route::get('resetear/{token?}', function($token = null)
{
	return View::make('reset');
});
*/

Route::controller('/', 'HomeController');