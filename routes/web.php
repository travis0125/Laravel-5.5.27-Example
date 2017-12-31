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
    return view('welcome');
});

Route::get('/teachers', 'TeachersController@index')
    ->name('teachers.index');

Route::get('/teachers/create', 'TeachersController@create')
    ->name('teachers.create');

Route::post('/teachers/store', 'TeachersController@store')
    ->name('teachers.store');

Route::get('/teachers/{id}', 'TeachersController@show')
    ->where('id', '[0-9]+')
    ->name('teachers.show');

Route::get('/teachers/{id}/edit', 'TeachersController@edit')
    ->where('id', '[0-9]+')
    ->name('teachers.edit');

Route::put('/teachers/{id}', 'TeachersController@update')
    ->name('teachers.update');

Route::delete('/teachers/{id}', 'TeachersController@destroy')
    ->name('teachers.destroy');

/*
Route::group(['as' => 'teachers.', 'prefix' => 'teachers'], function () {
    // url: /teacher/
    Route::get('/', 'TeachersController@index');

    // url: /teacher/create
    Route::get('/create', 'TeachersController@create')
        ->name('create');

    // url: /teacher/store
    Route::post('/store', 'TeachersController@store');

    // url: /teacher/45
    Route::get('/{id}', 'TeachersController@show')
        ->where('id', '[0-9]+')
        ->name('show');
});
*/