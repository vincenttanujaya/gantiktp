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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update', 'HomeController@update');
Route::get('/riwayat', 'HomeController@riwayat');
Route::get('/status', 'formController@index');
Route::post('/statusktp', 'formController@status');
Route::get('/status2', 'formController@status2');
Route::post('/submitform', 'formController@submit');
Route::get('/cekdata', 'formController@cekdata');
