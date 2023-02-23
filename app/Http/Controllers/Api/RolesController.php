<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissionChangeRequest;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends BaseController
{
    /**
     * Show Roles List
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request): JsonResponse
    {
        $data = Role::get();

        return $this->successResponse($data);
    }

    /**
     * Store Role
     *
     * @param int $id
     * @param RoleRequest $request
     * @return JsonResponse
     */
    public function store(RoleRequest $request): JsonResponse
    {
        $role = Role::create([
            'guard_name' => $request->guard_name ?? 'web',
            'name' => $request->name,
        ]);


        if ($role) {
            // assign permission to role
            if (isset($request->permissions)) {
                $role->syncPermissions($request->permissions);
            }

            return $this->successResponse([
                'message' => 'Role created succesfully!',
            ]);
        }

        return $this->failedResponse();
    }

    /**
     * Show Role
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function show($id, Request $request): JsonResponse
    {
        if ($role = Role::with('permissions')->find($id)) {
            return $this->successResponse([
                'role' => $role,
            ]);
        }

        return $this->failedResponse('Not found!');
    }

    /**
     * Delete Role
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function delete($id, Request $request): JsonResponse
    {
        if ($role = Role::find($id)) {
            $role->delete();

            return $this->successResponse([
                'message' => 'Role has been deleted',
            ]);
        }

        return $this->failedResponse('Not found!');
    }

    /**
     * Change Role
     *
     * @param int $id
     * @param PermissionChangeRequest $request
     * @return JsonResponse
     */
    public function changePermissions($id, PermissionChangeRequest $request): JsonResponse
    {
        $request->validate([
            'permissions' => 'required',
        ]);

        if ($role = Role::find($id)) {
            // assign permission to role
            $role->syncPermissions($request->permissions);

            return $this->successResponse([
                'message' => 'Permission changed successfully!',
            ]);
        }

        return $this->failedResponse('Not found!');
    }
}
