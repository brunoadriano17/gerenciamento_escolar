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
//Rotas de Usuario
Route::get('/', 'UsuarioController@index');
Route::get('/form', 'UsuarioController@create');
Route::post('/', 'UsuarioController@store');

Route::get('/soma/{a}/{b}', 'UsuarioController@soma');

