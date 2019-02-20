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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/items/{place?}', 'ItemController@index');
Route::post('/items', 'ItemController@store');
Route::patch('/items/{item}', 'ItemController@update');
Route::delete('/items/{item}', 'ItemController@destroy');

Route::get('/categorias', 'CategoriaController@index');
Route::get('/categorias/create', 'CategoriaController@formCreate');
Route::get('/categorias/{id}', 'CategoriaController@edit');
Route::patch('/categorias/{id}', 'CategoriaController@update');
