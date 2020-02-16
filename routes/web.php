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

Route::resource('skis', 'SkisController');
Route::resource('snowboards', 'SnowboardsController');
Route::resource('skiboots', 'SkibootsController');
Route::resource('boots', 'BootsController');
Route::resource('admin','AdminController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
