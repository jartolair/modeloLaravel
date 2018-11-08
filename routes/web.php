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

Route::get('/insert','DBController@insert');
Route::get('/update/{id}','DBController@update');
Route::get('/select/{id}','DBController@select');
Route::get('/delete/{id}','DBController@delete');
Route::get('/select/','DBController@selectAll');

Route::get('/insert2','DBController2@insert');
Route::get('/update2/{id}','DBController2@update');
Route::get('/select2/{id}','DBController2@select');
Route::get('/delete2/{id}','DBController2@delete');
Route::get('/select2/','DBController2@selectAll');