<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Modules\User\Controllers\UserController;

Route::group([
    'prefix' => 'user',
    'middleware' => '',
], function () {
    Route::get('users/{userId}/roles', [UserController::class, 'getUserRoles']);
    Route::post('users/{userId}/roles', [UserController::class, 'assignUserRoles']);
    Route::delete('users/{userId}/roles/{roleId}', [UserController::class, 'removeUserRole']);
});
