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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','MasterController@Dashboard');
route::get('/Dokumen/create','MasterController@create') ->name('Dokumen.create');
route::post('/Dokumen/','MasterController@store') ->name('Dokumen.store');
route::put('/Dokumen/update/{id}','MasterController@update') ->name('Dokumen.update');
route::get('/Dokumen/edit/{id}','MasterController@edit') ->name('Dokumen.edit');
route::get('/Dokumen/delete/{id}','MasterController@destroy') ->name('Dokumen.destroy');