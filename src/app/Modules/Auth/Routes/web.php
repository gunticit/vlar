<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Controllers\AuthController;

Route::group([
    'module' => 'Auth'
], function () {
    Route::get('/auth-test', [AuthController::class, 'index']);
});
