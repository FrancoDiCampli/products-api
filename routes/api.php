<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("login",[UserController::class,'index'])->name('login');

// Route::get('products',[ProductController::class,'index']);
// Route::get('product/{product_id}',[ProductController::class,'show']);

