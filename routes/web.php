<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



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
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ObsequioController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetFacturaController;




Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


                   //RUTAS CLIENTE
Route::middleware(['auth:sanctum'])->get('/api/cliente',[ClienteController::class,'index'])->name('cliente');


Route::middleware(['auth:sanctum'])->post('/api/cliente/registrar',[ClienteController::class,'store']);
Route::middleware(['auth:sanctum'])->get('/api/cliente/getCate',[ClienteController::class,'getCategoria']);
Route::middleware(['auth:sanctum'])->put('/api/cliente/actualizar',[ClienteController::class,'update']);
Route::middleware(['auth:sanctum'])->post('/api/cliente/eliminar',[ClienteController::class,'destroy']);



                  //RUTAS PRODUCTO
                 
 Route::middleware(['auth:sanctum'])->get('/api/producto',[ProductoController::class,'index'])->name('producto');


 Route::middleware(['auth:sanctum'])->get('/api/producto/getmarca',[ProductoController::class,'getMarca'])->name('marca');
 Route::middleware(['auth:sanctum'])->post('/api/producto/registrar',[ProductoController::class,'store']);
 Route::middleware(['auth:sanctum'])->put('/api/producto/actualizar',[ProductoController::class,'update']);
 Route::middleware(['auth:sanctum'])->post('/api/producto/eliminar',[ProductoController::class,'destroy']);


 
                //RUTAS OBSEQUIO

Route::middleware(['auth:sanctum'])->get('/api/obsequio',[ObsequioController::class,'index'])->name('obsequio');
Route::middleware(['auth:sanctum'])->post('/api/obsequio/registrar',[ObsequioController::class,'store']);
Route::middleware(['auth:sanctum'])->put('/api/obsequio/actualizar',[ObsequioController::class,'update']);
Route::middleware(['auth:sanctum'])->post('/api/obsequio/eliminar',[ObsequioController::class,'destroy']);


              //RUTAS CREDITO

Route::middleware(['auth:sanctum'])->get('api/credito',[CreditoController::class,'index'])->name('credito');
Route::middleware(['auth:sanctum'])->post('/api/credito/registrar',[CreditoController::class,'store' ]);             
Route::middleware(['auth:sanctum'])->put('/api/credito/actulizar',[CreditoController::class,'update' ]);             
Route::middleware(['auth:sanctum'])->post('/api/credito/eliminar',[CreditoController::class,'destoy' ]);  







 
               //RUTAS FACTURA
Route::middleware(['auth:sanctum'])->post('/api/factura,registrar',[FacturaController::class,'store']);              


              