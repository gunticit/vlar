<?php

namespace App\Modules\Member\Controllers;

use App\Http\Controllers\BaseController;
use App\Services\MemberService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends BaseController
{
    private $service;
    public function __construct(
        MemberService $service,
    ){
        $this->service = $service;
    }

    public function index(Request $request){
    }
}