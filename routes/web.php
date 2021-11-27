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


Route::get('/', function () {
    return view('welcome');
});
 

                     //RUTAS CLIENTE
Route::get('/api/cliente',[ClienteController::class,'index']);
Route::post('/api/cliente/registro',[ClienteController::class,'store']);
Route::put('/api/cliente/actualizar',[ClienteController::class,'update']);
Route::delete('/api/cliente/eliminar',[ClienteController::class,'destroy']);

                //RUTAS PRODUCTO
Route::get('/api/producto',[ProductoController::class,'index']);
Route::post('/api/producto/registro',[ProductoController::class,'store']);
Route::put('/api/producto/actualizar',[ProductoController::class,'update']);
Route::delete('/api/producto/eliminar',[ProductoController::class,'destroy']);