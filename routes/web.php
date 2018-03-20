<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route Kelas*/
//Index
Route::get('/kelas', 'KelasController@index');
//Add
Route::get('/kelas/add', 'KelasController@create');
Route::post('/kelas/add', 'KelasController@store');
//Edit
Route::get('/kelas/{id}/edit', 'KelasController@edit');
Route::patch('/kelas/{id}/edit', 'KelasController@update');
//Delete
Route::get('/kelas/{id}/delete', 'KelasController@destroy');

/*Route Siswa*/
//Index
Route::get('/siswa', 'SiswaController@index');
//Add
Route::get('/siswa/add', 'SiswaController@create');
Route::post('/siswa/add', 'SiswaController@store');
//Edit
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::patch('/siswa/{id}/edit', 'SiswaController@update');
//Delete
Route::get('/siswa/{id}/delete', 'SiswaController@destroy');
