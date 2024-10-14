<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::middleware(['api'])->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/verify-code', [AuthController::class, 'verifyCode']);
});
