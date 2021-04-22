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
Route::get('/','App\Http\Controllers\TodoController@index')->name('index');
Route::get('/create','App\Http\Controllers\TodoController@create')->name('create');
Route::get('/todo/{id}','App\Http\Controllers\TodoController@show')->name('show');
Route::post('/create','App\Http\Controllers\TodoController@store');
Route::get('/setState','App\Http\Controllers\TodoController@changeState')->name('state');
