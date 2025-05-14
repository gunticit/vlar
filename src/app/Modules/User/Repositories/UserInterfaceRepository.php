<?php
namespace App\Modules\User\Repositories;

use Illuminate\Support\Facades\Request;
use App\Repositories\RepositoryInterface;

interface UserInterfaceRepository extends RepositoryInterface
{
    public function list(Request $request);
    public function find($id);
    public function attachRole($userId, $roleId);
    public function detachRole($userId, $roleId);
    public function getRoles($userId);
}