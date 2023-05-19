<?php

use Illuminate\Support\Facades\Auth;
use App\User;

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('password/change', 'Auth\UpdatePasswordController@showChangePasswordForm')->name('cambiar');
Route::post('password/change', 'Auth\UpdatePasswordController@change')->name('actualizar_pwd');

Route::get('/home', 'HomeController@index')->name('home');

/* Creo las rutas para todos los metodos para el controlador Liquidaciones (Nombre-Controlador)
Route::resource('recibos', 'RecibosController');*/

Route::get('/recibos','RecibosController@index')->name('recibos');
Route::get('/misrecibos','RecibosController@misrecibos')->name('misrecibos');
Route::get('/recibos/descargar-recibo/{id}', 'RecibosController@descargar')->name('descargar');
