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


Auth::routes();
Route::get('/', function () {
    return view('auth/login');
});
Route::get('/test', 'StudentController@test');

Route::group(['middleware' => 'auth',], function () {

	Route::get('/home', function () {
    	return view('welcome');
	});
	Route::get('/main/{manager}', 'StudentController@show');
	Route::get('/enquireies', 'StudentController@showEnquireies');
	Route::get('/details/{id}', 'StudentController@showDetail');
	Route::post('/student', 'StudentController@store');
	Route::post('/student/update', 'StudentController@update');
	Route::post('/student/delete', 'StudentController@delete');
	Route::post('/student/deleteAll', 'StudentController@deleteAll');
	Route::get('/main/{key}/{value}', 'StudentController@searchStudent');

	Route::get('upload','ExcelController@upload');
	Route::post('excel/export','ExcelController@export');
	Route::post('excel/import','ExcelController@import');

	Route::post('/reset_email', 'OrderController@resetEmail');
	Route::post('/general_email', 'OrderController@generalEmail');
	Route::post('/special_email', 'OrderController@specialEmail');
	Route::get('/get_email/{id}/{manager_name}', 'OrderController@getEmail');

	Route::get('department/','DepartmentController@show');
	Route::get('department/{name}','DepartmentController@showContent');
	Route::post('department','DepartmentController@store');
	Route::post('department/delete','DepartmentController@delete');

	Route::get('course','CourseController@show');
	Route::get('course/{name}','CourseController@showContent');
	Route::post('course','CourseController@store');
	Route::post('course/delete','CourseController@delete');

	Route::get('emailmodule','EmailmoduleController@show');
	Route::get('emailmodule/{name}','EmailmoduleController@showContent');
	Route::post('emailmodule','EmailmoduleController@store');
	Route::post('emailmodule/delete','EmailmoduleController@delete');
});


