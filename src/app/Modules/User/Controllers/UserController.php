<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\BaseController;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    private $service;
    public function __construct(
        UserService $service,
    ){
        $this->service = $service;
    }

    public function index(Request $request){
    }

    public function getUserRoles($userId)
    {
        try {
            $roles = $this->service->getRoles($userId);
            return response()->json($roles);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }

    public function assignUserRoles(Request $request, $userId)
    {
        try {
            $roles = $request->input('roles', []);
            foreach ($roles as $roleId) {
                $this->service->assignRole($userId, $roleId);
            }
            return response()->json(['message' => 'Roles assigned successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function removeUserRole($userId, $roleId)
    {
        try {
            $this->service->removeRole($userId, $roleId);
            return response()->json(['message' => 'Role removed successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
