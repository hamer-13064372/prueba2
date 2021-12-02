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

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ObsequioController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\CreditoController;

Route::get('/', function () {
    return view('welcome');
});
 

                     //RUTAS CLIENTE
Route::get('/api/cliente',[ClienteController::class,'index']);
Route::post('/api/cliente/registrar',[ClienteController::class,'store']);
Route::get('/api/cliente/getClien',[ClienteController::class,'getCliente']);
Route::put('/api/cliente/actualizar',[ClienteController::class,'update']);
Route::delete('/api/cliente/eliminar',[ClienteController::class,'destroy']);



                //RUTAS PRODUCTO
Route::get('/api/producto',[ProductoController::class,'index']);
Route::post('/api/producto/registrar',[ProductoController::class,'store']);
Route::get('/api/producto/getProd',[ProductoController::class,'getProducto']);
Route::put('/api/producto/actualizar',[ProductoController::class,'update']);
Route::post('/api/producto/eliminar',[ProductoController::class,'destroy']);




             //RUTAS OBSEQUIO 
Route::get('/api/obsequio',[ObsequioController::class,'index']);
Route::post('/api/obsequio/registrar',[ObsequioController::class,'store']); 
Route::put('/api/obsequio/actualizar',[ObsequioController::class,'update']);
Route::post('/api/obsequio/eliminar',[ObsequioController::class,'destroy']);  


            //RUTAS CREDITO
Route::get('/api/credito',[CreditoController::class,'index']);


          //RUTAS FACTURA

Route::post('/api/factura/registrar',[FacturaController::class,'store']);

