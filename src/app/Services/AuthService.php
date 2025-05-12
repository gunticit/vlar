<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class AuthService
{
    /**
     * Attempt to authenticate user and create token
     *
     * @param array $credentials
     * @return array|false
     */
    public function attempt(array $credentials)
    {
        if (!$token = JWTAuth::attempt($credentials)) {
            return false;
        }

        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => config('jwt.ttl') * 60 // TTL in seconds
        ];
    }

    /**
     * Get the authenticated User
     *
     * @return User|null
     */
    public function user()
    {
        return Auth::user();
    }

    /**
     * Refresh a token
     *
     * @return string|false
     */
    public function refresh()
    {
        try {
            return JWTAuth::refresh();
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Invalidate the token
     *
     * @return bool
     */
    public function logout()
    {
        try {
            JWTAuth::invalidate();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Register a new user
     *
     * @param array $data
     * @return array|false
     */
    public function register(array $data)
    {
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            return $this->attempt([
                'email' => $data['email'],
                'password' => $data['password']
            ]);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Send password reset link
     *
     * @param string $email
     * @return bool
     */
    public function forgotPassword(string $email)
    {
        try {
            $status = Password::sendResetLink(['email' => $email]);
            return $status === Password::RESET_LINK_SENT;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Reset password
     *
     * @param array $data
     * @return bool
     */
    public function resetPassword(array $data)
    {
        try {
            $status = Password::reset($data, function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            });
            
            return $status === Password::PASSWORD_RESET;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Change password for authenticated user
     *
     * @param string $currentPassword
     * @param string $newPassword
     * @return bool
     */
    public function changePassword(string $currentPassword, string $newPassword)
    {
        try {
            $user = Auth::user();
            
            if (!Hash::check($currentPassword, $user->password)) {
                return false;
            }

            $user->password = Hash::make($newPassword);
            return $user->save();
        } catch (\Exception $e) {
            return false;
        }
    }
}
