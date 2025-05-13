<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Log;

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
            Log::info('Password reset attempt', [
                'email' => $email,
                'status' => $status
            ]);
            
            if ($status !== Password::RESET_LINK_SENT) {
                Log::error('Password reset failed', [
                    'email' => $email,
                    'status' => $status,
                    'status_code' => Password::RESET_LINK_SENT
                ]);
            }
            
            return $status === Password::RESET_LINK_SENT;
        } catch (\Exception $e) {
            Log::error('Password reset exception', [
                'email' => $email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
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
                User::where('id', $user->id)->update(['password' => Hash::make($password)]);
            });
            
            Log::info('Password reset attempt', [
                'email' => $data['email'],
                'status' => $status
            ]);

            if ($status !== Password::PASSWORD_RESET) {
                Log::error('Password reset failed', [
                    'email' => $data['email'],
                    'status' => $status
                ]);
            }
            
            return $status === Password::PASSWORD_RESET;
        } catch (\Exception $e) {
            Log::error('Password reset exception', [
                'email' => $data['email'] ?? 'unknown',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
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
                Log::warning('Invalid current password provided for password change', [
                    'user_id' => $user->id
                ]);
                return false;
            }

            User::where('id', $user->id)->update(['password' => Hash::make($newPassword)]);

            Log::info('Password changed successfully', [
                'user_id' => $user->id
            ]);
            
            return true;
        } catch (\Exception $e) {
            Log::error('Password change exception', [
                'user_id' => Auth::id(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return false;
        }
    }
}
