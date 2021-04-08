<?php

//use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('contacto', function () {
    return view('Layouts.Contacto');
})->name('contacto');

Route::get('tratamiento', function () {
    return view('Layouts.Tratamiento');
})->name('tratamiento');

Route::get('instalaciones', function () {
    return view('Layouts.Instalaciones');
})->name('instalaciones');

Route::get('nosotros', function () {
    return view('Layouts.Nosotros');
})->name('nosotros');

Route::get('a-quien-atendemos', function () {
    return view('Layouts.Atendemos');
})->name('atendemos');

Route::get('representantes', function () {
    return view('Layouts.Representantes');
})->name('representantes');


Route::post('form-contact-mail', 'App\Http\Controllers\ContractController@sendMail')->name('formContactMail');
