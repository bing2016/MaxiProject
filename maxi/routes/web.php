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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth',], function () {
	Route::get('/main', 'StudentController@show');
	Route::get('/student', 'StudentController@showEnquireies');
	Route::get('/student/{id}', 'StudentController@showStudent');
	Route::post('/student', 'StudentController@storeStudent')
});


