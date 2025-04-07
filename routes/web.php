<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Asegúrate de que esta línea esté presente
use App\Http\Controllers\ServiciosController; // Asegúrate de que esta línea esté presente



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/servicios', [ServiciosController::class, 'index']);
Route::get('/servicios/{servicio}', [ServiciosController::class, 'show']);

Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');
Route::get('/contacto', [ContactoController::class, 'mostrarFormulario'])->name('contacto');