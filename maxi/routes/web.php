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
	Route::get('/detail', 'StudentController@showDetail');
	Route::post('/student', 'StudentController@storeStudent');
	Route::put('/student', 'StudentController@modifyStudent');
	Route::get('/search', 'StudentController@searchStudent');
});

Route::post('/reset_email', 'OrderController@resetEmail');
Route::post('/general_email', 'OrderController@generalEmail');
Route::post('/special_email', 'OrderController@specialEmail');
//Route::get('/home', 'HomeController@index');