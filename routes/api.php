<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
    Route::apiResource('posts', App\Http\Controllers\PostController::class);
});

Route::middleware(['auth:sanctum'])->apiResource('posts', App\Http\Controllers\PostController::class);
Route::apiResource('posts', App\Http\Controllers\PostController::class)->only(['index', 'show']);

Route::post('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);
Route::post('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::post('logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']);


