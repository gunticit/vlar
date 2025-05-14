<?php
namespace App\Modules\User\Repositories;

use Illuminate\Support\Facades\Request;
use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function list(Request $request);
}