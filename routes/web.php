<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/quienes-somos', function () {
    return view('sandro.quienes_somos');
});
Route::get('/trabajos', function () {
    return view('sandro.trabajos');
});
Route::get('/nuestros-servicios', function () {
    return view('sandro.nuestros_servicios');
});