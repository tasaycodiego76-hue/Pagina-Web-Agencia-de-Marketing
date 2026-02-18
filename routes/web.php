<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferenciaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/quienes-somos', function () {
    return view('sandro.quienes_somos');
});
Route::get('/trabajos', function () {
    return view('sandro.trabajos');
});
Route::get('/servicios', function () {
    return view('sandro.nuestros_servicios');
});
Route::get('/referencias', function () {
    return view('sandro.referencia');
});

Route::get('/contacto', function () {
    return view('sandro.contact');
});

Route::post('/enviar-referencia', [ReferenciaController::class, 'store'])->name('referencia.store');