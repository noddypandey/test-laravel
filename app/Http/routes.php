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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/departments', 'DepartmentController@index');
Route::get('/departments/add', 'DepartmentController@add');
Route::post('/departments/store', 'DepartmentController@store');
Route::get('/departments/{department_id}/users', 'DepartmentController@users');

Route::get('/users', 'UserController@index');
Route::get('/users/add', 'UserController@add');
Route::post('/users/store', 'UserController@store');
Route::get('/users/parent/{parent_id}', 'UserController@parent');
Route::get('/users/parent/{parent_id}/department/{department_id}', 'UserController@department');
