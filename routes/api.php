<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('products',[ProductController::class,'index']);
Route::middleware('auth:sanctum')->get('products/{product}',[ProductController::class,'show']);
Route::middleware('auth:sanctum')->get('users',[UserController::class,'showAll']);

Route::middleware('auth:sanctum')->get('marcas',[DataController::class,'marcas']);

// Rutas al data sin persistir a la bbdd
Route::middleware('auth:sanctum')->get('modelos/{marca?}',[DataController::class,'modelos']);
Route::middleware('auth:sanctum')->get('anios/{marca?}/{modelos?}',[DataController::class,'anios']);
Route::middleware('auth:sanctum')->get('submodelos/{marca?}/{modelo?}/{anio?}',[DataController::class,'subModelos']);

Route::middleware('auth:sanctum')->get('tipoPersona',[DataController::class,'tipoPersona']);

Route::middleware('auth:sanctum')->get('codigoPostal/{marca?}/{localidad?}',[DataController::class,'codigoPostal']);
Route::middleware('auth:sanctum')->get('modoFacturacion/{rama?}/{plan?}',[DataController::class,'modoFacturacion']);
Route::middleware('auth:sanctum')->get('condicionPago/{rama?}/{modo_facturacion?}',[DataController::class,'condicionPago']);
Route::middleware('auth:sanctum')->get('formaPago/{marca?}/{modo_facturacion?}/{plan_comercial?}',[DataController::class,'formaPago']);
Route::middleware('auth:sanctum')->get('equipoRastreo/{marca?}',[DataController::class,'equipoRastreo']);
Route::middleware('auth:sanctum')->get('clausulas',[DataController::class,'clausulas']);




Route::post("login",[UserController::class,'index'])->name('login');

Route::get('products',[ProductController::class,'index']);
// Route::get('product/{product_id}',[ProductController::class,'show']);
Route::get('product/{branch_id}',[ProductController::class,'getProducts']);

