<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModoPagoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//rutas categoria
Route::get('categoria/index',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('categoria/create',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('categoria/store',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('categoria/edit/{id}',[CategoriaController::class, 'edit'])->name('categoria.edit');
Route::post('categoria/update/{id}',[CategoriaController::class,'update'])->name('categoria.update');
Route::post('categoria/destroy/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');

//rutas marcas
Route::get('marca/index',[MarcaController::class,'index'])->name('marca.index');
Route::get('marca/create',[MarcaController::class, 'create'])->name('marca.create');
Route::post('marca/store',[MarcaController::class,'store'])->name('marca.store');
Route::get('marca/edit/{id}',[MarcaController::class, 'edit'])->name('marca.edit');
Route::post('marca/update/{id}',[MarcaController::class,'update'])->name('marca.update');
Route::post('marca/destroy/{id}',[MarcaController::class,'destroy'])->name('marca.destroy');

//rutas productos
Route::get('producto/index',[ProductoController::class,'index'])->name('producto.index');
Route::get('producto/create',[ProductoController::class, 'create'])->name('producto.create');
Route::post('producto/store',[ProductoController::class,'store'])->name('producto.store');
Route::get('producto/edit/{id}',[ProductoController::class, 'edit'])->name('producto.edit');
Route::post('producto/update/{id}',[ProductoController::class, 'update'])->name('producto.update');
route::post('producto/destroy/{id}',[ProductoController::class, 'destroy'])->name('producto.destroy');

//rutas Cliente
Route::get('cliente/index',[ClienteController::class, 'index'])->name('cliente.index');
Route::get('cliente/create',[ClienteController::class,'create'])->name('cliente.create');
Route::post('cliente/store',[ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/edit/{id}',[ClienteController::class, 'edit'])->name('cliente.edit');
Route::post('cliente/update/{id}',[ClienteController::class, 'update'])->name('cliente.update');
Route::post('cliente/destroy/{id}',[ClienteController::class, 'destroy'])->name('cliente.destroy');

//rutas estado
route::get('estado/index',[EstadoController::class,'index'])->name('estado.index');
Route::get('estado/create',[EstadoController::class, 'create'])->name('estado.create');
Route::post('estado/store',[EstadoController::class, 'store'])->name('estado.store');
Route::get('estado/edit/{id}',[EstadoController::class, 'edit'])->name('estado.edit');
Route::post('estado/update/{id}',[EstadoController::class, 'update'])->name('estado.update');
Route::post('estado/destroy/{id}',[EstadoController::class,'destroy'])->name('estado.destroy');

//rutas modoPago
Route::get('modopago/index',[ModoPagoController::class,'index'])->name('modoPago.index');
Route::get('modopago/create',[ModoPagoController::class,'create'])->name('modoPago.create');
Route::post('modopago/store',[ModoPagoController::class, 'store'])->name('modoPago.store');
Route::get('modopago/edit/{id}',[ModoPagoController::class,   'edit'])->name('modoPago.edit');
Route::post('modopago/update/{id}',[ModoPagoController::class,  'update'])->name('modoPago.update');
Route::post('modopago/destroy/{id}',[ModoPagoController::class,'destroy'])->name('modoPago.destroy');

//rutas factura
Route::get('factura/index',[FacturaController::class,  'index'])->name('factura.index');
Route::get('factura/create',[FacturaController::class, 'create'])->name('factura.create');
Route::post('factura/store',[FacturaController::class,   'store'])->name('factura.store');
Route::get('factura/edit/{id}',[FacturaController::class, 'edit'])->name('factura.edit');
Route::post('factura/update/{id}',[FacturaController::class, 'update'])->name('factura.update');
Route::post('factura/destroy/{id}',[FacturaController::class,'destroy'])->name('factura.destroy');

//rutas detalle fctura
Route::get('detalle/index',[DetalleFacturaController::class,'index'])->name('detalleFactura.imdex');
Route::get('detalle/create',[DetalleFacturaController::class, 'create'])->name('detalleFactura.create');
Route::post('detalle/store',[DetalleFacturaController::class,  'store'])->name('detalleFactura.store');
Route::get('detalle/edit/{id}',[DetalleFacturaController::class, 'edit'])->name('detalleFactura.edit');
Route::post('detalle/update/{id}',[DetalleFacturaController::class, 'update'])->name('detalleFactura.update');
Route::post('detalle/destroy/{id}',[DetalleFacturaController::class, 'destroy'])->name('detalleFactura.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
