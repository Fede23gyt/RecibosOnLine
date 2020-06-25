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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Creo las rutas para todos los metodos para el controlador Liquidaciones (Nombre-Controlador)
Route::resource('recibos', 'RecibosController');*/

route::get('/recibos','RecibosController@index')->name('recibos');


