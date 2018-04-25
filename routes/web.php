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

Route::get('/rabby','CellController@milf');

Route::get('/avee','CellController@types');

Route::get('/person','CellController@person');

Route::get('/addBloodInfo','BloodController@addBloodInfo');

Route::post('/input_data','BloodController@input_data');

Route::get('/blood_list','BloodController@blood_list');