<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\MarcaVehiculoController;
use App\Http\Controllers\TipoServicioController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clientes', ClienteController::class);

Route::resource('vehiculos', VehiculoController::class);

Route::resource('servicios', ServicioController::class);

Route::resource('marca-vehiculos', MarcaVehiculoController::class);

Route::resource('tipo-servicios', TipoServicioController::class);
