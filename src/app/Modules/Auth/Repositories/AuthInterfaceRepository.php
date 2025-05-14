<?php
namespace App\Modules\Auth\Repositories;

use Illuminate\Support\Facades\Request;

interface AuthRepositoryInterface
{
    public function list(Request $request);
}