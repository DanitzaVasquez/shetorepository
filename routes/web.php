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
    return view('welcome');
});

Route::get('/calcular/{edad}', function ($edad) {
if ($edad > 0 && $edad < 18 ){
    return 'eres menor de edad ';
}elseif ($edad >= 18 && $edad <=100 ) {
    return 'eres mayor de edad';
}else {
    return 'edad erronea';
}
});

Route::get('/saludo/{nombre}', function ($nombre) {
    return 'hola mi nombre es ' . $nombre;
});


Route::post('/saludo', function () {
    return 'se creo un dato';
});
