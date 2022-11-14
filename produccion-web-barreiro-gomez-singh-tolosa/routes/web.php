<?php

use Illuminate\Support\Facades\Route;
use App\Models\Carrito;
use App\Http\Controllers\NoticiaController;
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

Route::get('noticias', [App\Http\Controllers\NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/create', [App\Http\Controllers\NoticiaController::class, 'create'])->name('noticias.create');
Route::get('noticias/{noticia}', [App\Http\Controllers\NoticiaController::class, 'show'])->name('noticias.show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
