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
	Route::get('/enquireies', 'StudentController@showEnquireies');
	Route::get('/detail/{id}', 'StudentController@showDetail');
	Route::post('/student', 'StudentController@store');
	Route::put('/student', 'StudentController@update');
	Route::delete('/student', 'StudentController@delete');
	Route::get('/main/{key}/{value}', 'StudentController@searchStudent');
});

Route::post('/reset_email', 'OrderController@resetEmail');
Route::post('/general_email', 'OrderController@generalEmail');
Route::post('/special_email', 'OrderController@specialEmail');
//Route::get('/home', 'HomeController@index');

Route::get('upload','ExcelController@upload');
Route::post('excel/export','ExcelController@export');
Route::get('excel/import','ExcelController@import');

Route::get('department','DepartmentController@show');
Route::post('department','DepartmentController@store');
Route::put('department','DepartmentController@update');
Route::delete('department','DepartmentController@delete');

Route::get('course','CourseController@show');
Route::post('course','CourseController@store');
Route::put('course','CourseController@update');
Route::delete('course','CourseController@delete');

Route::get('emailmodule','EmailmoduleController@show');
Route::post('emailmodule','EmailmoduleController@store');
Route::put('emailmodule','EmailmoduleController@update');
Route::delete('emailmodule','EmailmoduleController@delete');