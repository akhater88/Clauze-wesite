<?php

use App\Http\Controllers\DemoRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/demo-request', [DemoRequestController::class, 'store']);
