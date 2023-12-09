<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(["auth:sanctum"])->group(function () {
    Route::get('/transaksi', [AdminController::class, 'index']);
    Route::post('/transaksi-create', [AdminController::class,'store']);
    Route::put('/user/{id}', [AdminController::class, 'update']);
    Route::delete('/user/{id}', [AdminController::class, 'destroy']);
    Route::post('/register',[AdminController::class, 'register']);
});

//auth user rest api
Route::post('/login',[AuthController::class, 'login']);
