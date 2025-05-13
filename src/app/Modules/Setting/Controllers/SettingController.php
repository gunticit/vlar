<?php

namespace App\Modules\Setting\Controllers;

use App\Http\Controllers\BaseController;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends BaseController
{
    private $service;
    public function __construct(
        SettingService $service,
    ){
        $this->service = $service;
    }

    public function index(Request $request){
    }
}