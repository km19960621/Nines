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
  Route::get('/', 'NineController@index');
  Route::get('nine/show', 'NineController@show');
  Route::get('nine/create', 'NineController@add');
  Route::post('nine/create', 'NineController@create');
  Route::get('nine/edit', 'NineController@edit');
  Route::post('nine/edit', 'NineController@update');
  Route::get('nine/delete', 'NineController@delete');
  Route::get('order/create', 'OrderController@add');
  Route::post('order/create', 'OrderController@create');
  Route::get('order/edit', 'OrderController@edit');
  Route::post('order/edit', 'OrderController@update');
  Route::get('order/delete', 'OrderController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
