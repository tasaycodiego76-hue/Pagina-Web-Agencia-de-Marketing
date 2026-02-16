<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::post('/contacto', [ContactoController::class, 'submit'])->name('contacto.submit');