<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\PasswordChangeRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public function login(AuthRequest $request): JsonResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return $this->successResponse([
                'access_token' => $accessToken,
            ]);
        }

        return $this->failedResponse('Invalid Credentials!');
    }

    public function profile(Request $request): JsonResponse
    {
        if ($user = auth()->user()) {
            $roles = $user->getRoleNames();
            $permission = $user->getAllPermissions();

            return $this->successResponse($user);
        }

        return $this->failedResponse();
    }

    public function changePassword(PasswordChangeRequest $request): JsonResponse
    {
        $user = auth()->user();
        if ($user && Hash::check($request->old_password, $user->password)) {
            User::find($user->id)
                ->update([
                    'password' => Hash::make($request->password),
                ]);

            return $this->successResponse([
                'message' => 'Password has been changed',
            ]);
        }

        return $this->failedResponse();
    }

    public function updateProfile(ProfileUpdateRequest $request): JsonResponse
    {
        $user = auth()->user();
        // check unique email except this user
        if (isset($request->email)) {
            $check = User::where('email', $request->email)
                ->where('id', '!=', $user->id)
                ->first();

            if ($check) {
                return $this->failedResponse('The email address is already used!');
            }
        }

        $user->update(
            $request->only([
                'name',
                'email',
            ])
        );

        return $this->successResponse([
            'message' => 'Profile updated successfully!',
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $user = auth()->user()->token();
        $user->revoke();

        return $this->successResponse([
            'message' => 'Logged out succesfully!',
        ]);
    }
}
