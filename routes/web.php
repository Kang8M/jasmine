<?php

use Illuminate\Support\Facades\Route;

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

Route::get('status', 'StatusController@index');
Route::get('status/create', 'StatusController@create');
Route::post('status/store', 'StatusController@store')->middleware('checkStatus');
Route::get('status/edit/{id}', 'StatusController@edit');
Route::put('status/update/{id}', 'StatusController@update')->middleware('checkStatus');
Route::get('status/delete/{id}', 'StatusController@destroy');