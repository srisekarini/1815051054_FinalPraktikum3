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

Route::get('/admin','MasterController@Dashboard');
Route::get('/Dokumen/create','MasterController@create') ->name('Dokumen.create');
Route::post('/Dokumen/','MasterController@store') ->name('Dokumen.store');
Route::put('/Dokumen/update/{id}','MasterController@update') ->name('Dokumen.update');
Route::get('/Dokumen/edit/{id}','MasterController@edit') ->name('Dokumen.edit');
Route::get('/Dokumen/delete/{id}','MasterController@destroy') ->name('Dokumen.destroy');
Auth::routes();

Route::get('/home', 'MasterController@Dashboard')->name('home');

Route::get('/dashboard', 'homePenggunaController@Dashboard');
