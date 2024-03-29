<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PDFController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clientes',ClienteController::class);
Route::resource('tiendas',TiendaController::class);
Route::resource('pedidos',PedidoController::class);
Route::get('/pdf_pedidos/{id}', [App\Http\Controllers\PDFController::class, 'getPDF_pedidos'])->name('getPDF_pedidos');
Route::get('/pdf_pedidos_completo/', [App\Http\Controllers\PDFController::class, 'getPDF_pedidos_completo'])->name('getPDF_pedidos_completo');
Route::get('/estado_pedido/{id}', [App\Http\Controllers\PedidoController::class, 'cambiar_de_estado'])->name('estado_pedido');

Route::get('event/suscribirse/{id}',[App\Http\Controllers\EventController::class, 'subscribe'] )
     ->name('event.subscribe');

Route::post('event/link-subscribe/{id}',[App\Http\Controllers\EventController::class,'getLinkSubscribe'] )->name('event.getLinkSubscribe');

Auth::routes();
