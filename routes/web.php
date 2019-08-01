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
Route::get('/{id}/edit', 'UsuarioController@edit');
Route::put('/{id}', 'UsuarioController@update');


//Rotas de Nivel
Route::get('/nivel', 'NivelController@index');
Route::get('/nivel/form', 'NivelController@create');
Route::post('/nivel', 'NivelController@store');



Route::post('/nivel/delete', 'NivelController@delete');