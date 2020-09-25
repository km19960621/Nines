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
Route::group(['middleware' => 'auth'], function() {
  Route::get('nine', 'NineController@index');
  Route::get('nine/create', 'NineController@add');
  Route::post('nine/create', 'NineController@create');
  Route::get('nine/edit', 'NineController@edit');
  Route::post('nine/edit', 'NineController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
