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

Route::get('/lessons', 'LessonController@index');
Route::get('/lessons/list', 'LessonController@index');
Route::get('/lessons/edit/{id}', 'LessonController@edit');
Route::post('/lessons/update', 'LessonController@update');
Route::get('/lessons/add', 'LessonController@add');
Route::post('/lessons/add_lesson', 'LessonController@add_lesson');

Route::get('/home/index', 'HomeController@index');
Route::get('/home/', 'HomeController@index');

