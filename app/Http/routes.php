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
    return view('auth/login');
});

Route::get('/home', function() {
    return redirect('/home/index');
});

Route::get('/lessons', 'LessonController@index');
Route::get('/lessons/list', 'LessonController@index');
Route::get('/lessons/edit/{id}', 'LessonController@edit');
Route::post('/lessons/update', 'LessonController@update');
Route::get('/lessons/add', 'LessonController@add');
Route::post('/lessons/add_lesson', 'LessonController@add_lesson');
Route::post('/lessons/update_image', 'LessonController@update_image');

Route::get('/home/index', 'HomeController@index');
//Route::get('/home', 'HomeController@index');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');

Route::get('infos/create', 'InfoController@create');
Route::post('info/store', 'InfoController@store');

Route::get('notes/', 'NoteController@index');
Route::get('notes/index', 'NoteController@index');
Route::get('notes/list_eleve/{id}', 'NoteController@list_eleve');
Route::get('notes/add_note/{id_lesson}/{id_eleve}', 'NoteController@add_note');
Route::post('notes/update_note', 'NoteController@update_note');
Route::post('notes/redirect_note', 'NoteController@redirect_note');








