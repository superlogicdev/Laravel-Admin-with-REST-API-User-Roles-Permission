<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RoleChangeRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    /**
     * Show Users List
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request): JsonResponse
    {
        $perPage = $request->per_page ?? 10;
        $users = User::paginate($perPage);

        return $this->successResponse($users);
    }

    /**
     * Store User Information
     *
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        // store user information
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($user) {
            $role = $user->syncRoles($request->role);

            return $this->successResponse([
                'message' => 'User created succesfully!',
            ]);
        }

        return $this->failedResponse();
    }

    /**
     * Show User Profile
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function profile($id, Request $request): JsonResponse
    {
        if ($user = User::find($id)) {
            return $this->successResponse($user);
        }

        return $this->failedResponse('Not found!');
    }

    /**
     * Delete User
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function delete($id, Request $request): JsonResponse
    {
        if ($user = User::find($id)) {
            $user->delete();

            return $this->successResponse([
                'message' => 'User has been deleted',
            ]);
        }

        return $this->failedResponse('Not found!');
    }

    /**
     * Change User Role
     *
     * @param int $id
     * @param RoleChangeRequest $request
     * @return JsonResponse
     */
    public function changeRole($id, RoleChangeRequest $request): JsonResponse
    {
        if ($user = User::find($id)) {
            // assign role to user
            $user->syncRoles($request->roles);

            return $this->successResponse([
                'message' => 'Users Role has been updated!',
            ]);
        }

        return $this->failedResponse();
    }
}
