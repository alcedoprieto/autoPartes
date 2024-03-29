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

Route::get('excelDemo', 'ExcelController@create');
Route::get('excelJson', 'ExcelController@json');
Route::post('export', 'ExcelController@export');
Route::post('import/', 'ExcelController@import');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
