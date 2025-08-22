<?php
// routes/api.php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/me',[AuthController::class,'me']);
    Route::post('/logout',[AuthController::class,'logout']);

    // Customer
    Route::get('/services',[ServiceController::class,'index']);
    Route::post('/bookings',[BookingController::class,'store']);
    Route::get('/bookings',[BookingController::class,'index']);

    // Admin
    Route::middleware('admin')->group(function(){
        Route::post('/services',[ServiceController::class,'store']);
        Route::put('/services/{id}',[ServiceController::class,'update']);
        Route::delete('/services/{id}',[ServiceController::class,'destroy']);
        Route::get('/admin/bookings',[AdminController::class,'allBookings']);
    });
});
