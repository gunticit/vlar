<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Modules\Member\Controllers\MemberController;

Route::group([
    'prefix' => '',
    'middleware' => '',
], function () {
    Route::resource('', MemberController::class);
});