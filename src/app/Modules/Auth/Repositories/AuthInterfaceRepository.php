<?php
namespace App\Modules\Auth\Repositories;

interface AuthRepositoryInterface
{
    public function list(Request $request);
}