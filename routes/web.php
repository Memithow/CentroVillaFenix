<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Layouts.Home');
});

Route::get('contacto', function () {
    return view('Layouts.Contacto');
});

Route::get('tratamiento', function () {
    return view('Layouts.Tratamiento');
});

Route::get('instalaciones', function () {
    return view('Layouts.Instalaciones');
});

Route::get('nosotros', function () {
    return view('Layouts.Nosotros');
});
