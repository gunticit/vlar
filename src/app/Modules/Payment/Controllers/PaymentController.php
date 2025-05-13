<?php

namespace App\Modules\Payment\Controllers;

use App\Http\Controllers\BaseController;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends BaseController
{
    private $service;
    public function __construct(
        PaymentService $service,
    ){
        $this->service = $service;
    }

    public function index(Request $request){
    }
}