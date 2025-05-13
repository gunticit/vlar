<?php
namespace App\Modules\User\Repositories;

interface UserRepositoryInterface
{
    public function list(Request $request);
}