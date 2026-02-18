<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('home.index');
});
Route::post('/contacto', [ContactoController::class, 'submit'])->name('contacto.submit');