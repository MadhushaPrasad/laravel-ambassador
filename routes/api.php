<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::get("/admin", [AuthController::class, "register"]);

// Ambassadors routes


//Checkout routes