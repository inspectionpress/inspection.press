<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes (e.g., user registration & login)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    // User profile
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });

    // Booking routes
    Route::get('/bookings', [BookingController::class, 'index']); // Get all bookings for user
    Route::post('/bookings', [BookingController::class, 'store']); // Create a booking
    Route::get('/bookings/{id}', [BookingController::class, 'show']); // Get a specific booking
    Route::put('/bookings/{id}', [BookingController::class, 'update']); // Update a booking
    Route::delete('/bookings/{id}', [BookingController::class, 'destroy']); // Delete a booking

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});
