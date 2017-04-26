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
    return view('EmailModule');
});

Auth::routes();

Route::get('/home', 'StudentController@show');


	Route::get('/main', 'StudentController@show');
	Route::get('/enquireies', 'StudentController@showEnquireies');
	Route::get('/details/{id}', 'StudentController@showDetail');
	Route::post('/student', 'StudentController@store');
	Route::post('/student/update', 'StudentController@update');
	Route::post('/student/delete', 'StudentController@delete');
	Route::get('/main/{key}/{value}', 'StudentController@searchStudent');


Route::post('/reset_email', 'OrderController@resetEmail');
Route::get('/general_email', 'OrderController@generalEmail');
Route::post('/special_email', 'OrderController@specialEmail');
Route::get('/get_email/{id}', 'OrderController@getEmail');
//Route::get('/home', 'HomeController@index');

Route::get('upload','ExcelController@upload');
Route::post('excel/export','ExcelController@export');
Route::post('excel/import','ExcelController@import');

Route::get('department','DepartmentController@show');
Route::post('department','DepartmentController@store');
Route::post('department/update','DepartmentController@update');
Route::post('department/delete','DepartmentController@delete');

Route::get('course','CourseController@show');
Route::post('course','CourseController@store');
Route::post('course/update','CourseController@update');
Route::post('course/delete','CourseController@delete');

Route::get('emailmodule','EmailmoduleController@show');
Route::get('emailmodule/{name}','EmailmoduleController@showContent');
Route::post('emailmodule','EmailmoduleController@store');
Route::post('emailmodule/update','EmailmoduleController@update');
Route::post('emailmodule/delete','EmailmoduleController@delete');