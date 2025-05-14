<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Modules\Member\Controllers\MemberController;

Route::group([
    'prefix' => 'setting',
    'middleware' => ['auth:api']
], function () {
    
});