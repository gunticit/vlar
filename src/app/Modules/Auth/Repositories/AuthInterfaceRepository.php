<?php
namespace App\Modules\Auth\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\Request;

interface AuthRepositoryInterface extends RepositoryInterface
{
    public function list(Request $request);
}