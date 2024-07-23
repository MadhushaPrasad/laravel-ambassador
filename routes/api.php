<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::prefix("admin")->group(function () {
    Route::post("register", [AuthController::class, "register"]);
});

// Ambassadors routes

//Checkout routes
