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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/data', 'DataController@index')->name('data');
Route::get('/data/create', 'DataController@create')->name('data-create');
Route::post('/data/insert','DataController@insert');
Route::get('/data/edit/{id}','DataController@edit');
Route::post('/data/update','DataController@update');
Route::get('/data/hapus/{id}','DataController@hapus');
