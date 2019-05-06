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

Route::get('gironi', 'GironiController@index')->name('gironi');

Route::get('classifica', 'ClassificaController@index')->name('classifica');

Route::get('partite', 'PartiteController@index')->name('partite');

Route::get('playoff', 'PlayoffController@index')->name('playoff');

Route::get('/', function () {
    return view('welcome');
})->name('home');
