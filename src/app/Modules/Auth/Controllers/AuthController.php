<?php

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\BaseController;
use App\Services\AuthService;
use App\Modules\Auth\Requests\RegisterRequest;
use App\Modules\Auth\Requests\ForgotPasswordRequest;
use App\Modules\Auth\Requests\ResetPasswordRequest;
use App\Modules\Auth\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('Auth::index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if ($token = $this->service->attempt($credentials)) {
            return $this->sendResponse($token);
        }
        
        return $this->sendError('Unauthorized', 'Invalid credentials', 401);
    }

    public function me()
    {
        $user = $this->service->user();
        return $this->sendResponse($user);
    }

    public function logout()
    {
        $this->service->logout();
        return $this->sendResponse(null, 'Successfully logged out');
    }

    public function refresh()
    {
        if ($token = $this->service->refresh()) {
            return $this->sendResponse(['token' => $token]);
        }
        
        return $this->sendError('Token Error', 'Could not refresh token', 401);
    }

    public function register(RegisterRequest $request)
    {
        if ($token = $this->service->register($request->validated())) {
            return $this->sendResponse($token);
        }

        return $this->sendError('Registration Error', 'Could not register user', 500);
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        if ($this->service->forgotPassword($request->email)) {
            return $this->sendResponse(null, 'Password reset link sent successfully');
        }

        return $this->sendError('Reset Error', 'Could not send reset link', 500);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        if ($this->service->resetPassword($request->validated())) {
            return $this->sendResponse(null, 'Password reset successfully');
        }

        return $this->sendError('Reset Error', 'Could not reset password', 500);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if ($this->service->changePassword($request->current_password, $request->password)) {
            return $this->sendResponse(null, 'Password changed successfully');
        }

        return $this->sendError('Change Error', 'Could not change password', 500);
    }
}
