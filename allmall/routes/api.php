<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

//Route::get('/user', function (Request $request) {
//  return $request->user();
//})->middleware('auth:sanctum');

Route::middleware(['auth:sanctum', EnsureFrontendRequestsAreStateful::class])->post('/logout', [AuthController::class, 'logout']);

Route::post('/register', [AuthController::class,'register']);

Route::post('/login', [AuthController::class,'login']);

Route::post('/logout', [AuthController::class,'logout'])->middleware('auth:sanctum');
