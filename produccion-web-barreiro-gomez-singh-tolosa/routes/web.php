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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'productos'])->name('productos');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'carrito'])->name('carrito');
Route::get('/ingresos', [App\Http\Controllers\IngresosController::class, 'ingresos'])->name('ingresos');
Route::get('noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias.index');;
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'contacto'])->name('contacto');
Route::get('noticias/{noticia}', [App\Http\Controllers\NoticiasController::class, 'show'])->name('noticias.show');;
Route::get('noticia', [App\Http\Controllers\NoticiasController::class, 'create'])->name('noticias.create');;
