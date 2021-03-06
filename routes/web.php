<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Auth
 */
Route::group(['namespace' => 'Auth'], function() {
	Route::get('login', 'LoginController@showLoginForm')->name('login');
	Route::post('login', 'LoginController@login');
	Route::post('logout', 'LoginController@logout')->name('logout');
});

/**
 * Dashboard
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * Users
 */
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {
	Route::get('', 'UserController@index')->name('users.index');
	Route::get('{user}', 'UserController@index')->name('users.edit');
});
