<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

Route::get('/servicios/{servicio}', [ServiciosController::class, 'show'])->name('servicios.show');

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
