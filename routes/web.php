<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/presentacion', function () {
    return view('presentacion');
});
Route::get('/mision', function () {
    return view('mision');
});
Route::get('/Sacha_Inchi', function () {
    return view('sachaInchi');
});
Route::get('/', function () {
    return view('inicio');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});
