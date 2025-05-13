<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Modules\Payment\Controllers\PaymentController;

Route::group([
    'prefix' => '',
    'middleware' => '',
], function () {
    Route::resource('', PaymentController::class);
});