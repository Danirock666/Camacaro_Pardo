<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PrestamoController;

Route::resource('libros', LibroController::class);
Route::resource('autores', AutorController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('prestamos', PrestamoController::class);
Route::get('/', function () {return view('layout');});
