<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Modules\Setting\Controllers\SettingController;

Route::group([
    'prefix' => '',
    'middleware' => '',
], function () {
    Route::resource('', SettingController::class);
});