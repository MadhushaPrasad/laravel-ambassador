<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::prefix("admin")->group(function () {
    Route::post("register", [AuthController::class, "register"]);
    Route::post("login", [AuthController::class, "login"]);

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('user', [AuthController::class, 'user']);
    });
});

// Ambassadors routes

//Checkout routes
