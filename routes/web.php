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

Route::get('usuarios', 'Usuarios@index');
Route::get('usuarios/crear', 'Usuarios@create');
Route::post('usuarios/crear', 'Usuarios@store');
Route::get('usuarios/editar/{id}', 'Usuarios@edit');
Route::post('usuarios/editar', 'Usuarios@update');

