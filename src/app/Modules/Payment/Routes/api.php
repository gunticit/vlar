<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Payment\Controllers\PaymentController;

// Public routes
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [PaymentController::class, 'login']);
    Route::post('register', [PaymentController::class, 'register']);
    Route::post('forgot-password', [PaymentController::class, 'forgotPassword']);
    Route::post('reset-password', [PaymentController::class, 'resetPassword']);
});

// Protected routes
Route::group([
    'prefix' => 'auth',
    'middleware' => ['auth:api']
], function () {
    Route::get('me', [PaymentController::class, 'me']);
    Route::post('logout', [PaymentController::class, 'logout']);
    Route::post('refresh', [PaymentController::class, 'refresh']);
    Route::post('change-password', [PaymentController::class, 'changePassword']);
});
