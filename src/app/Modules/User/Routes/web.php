<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Modules\User\Controllers\UserController;

Route::group([
    'prefix' => '',
    'middleware' => '',
], function () {
    Route::resource('', UserController::class);
});