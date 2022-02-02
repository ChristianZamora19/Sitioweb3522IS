<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
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

Route::get('/index', function () {
    return view('Templete.index');
})->name('index');

Route::get('/Training', function () {
    return view('Templete.Training');
})->name('Training');

Route::get('/Contacto', function () {
    $categoria = new Categoria();
    $categoria->nombre = 'Christian Zamora';
    $categoria->codigo = '1320114025';
    $categoria->descripcion = 'Este proyecto ha sido relizado de forma correcta y completa, contando con lo solicitado';
    return view('Templete.Contacto', ['categoria' => $categoria]);
})->name('Contacto');