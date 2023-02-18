<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Models\Carrito;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaymentController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group( [ 'middleware' => ['is_admin'] ], function (){
    Route::resource('noticias', App\Http\Controllers\NoticiaController::class);
} );

Route::resource('noticias', App\Http\Controllers\NoticiaController::class);
Route::resource('productos', App\Http\Controllers\ProductosController::class);
Route::resource('carrito', App\Http\Controllers\CarritoController::class);
Route::resource('tienda', App\Http\Controllers\TiendaController::class);
Route::resource('contact', App\Http\Controllers\ContactController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ingresos', [App\Http\Controllers\IngresosController::class, 'ingresos'])->name('ingresos');
Route::get('novedades', [App\Http\Controllers\NovedadesController::class, 'index'])->name('novedades');
Route::get('contacted', [App\Http\Controllers\ContactController::class, 'contacted'])->name('contacted');
Route::get('aboutus', [App\Http\Controllers\AboutusController::class, 'aboutus'])->name('aboutus');
Route::get('payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');


Route::controller(CarritoController::class)->group(function(){
    Route::delete('carrito/', 'delete')->name('carrito.delete');
});