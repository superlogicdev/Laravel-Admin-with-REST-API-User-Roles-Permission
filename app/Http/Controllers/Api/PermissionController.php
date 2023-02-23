<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends BaseController
{
    /**
     * Get Permission List
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request): JsonResponse
    {
        $data = Permission::get();

        return $this->successResponse($data);
    }

    /**
     * Store Permission
     *
     * @param PermissionRequest $request
     * @return JsonResponse
     */
    public function store(PermissionRequest $request): JsonResponse
    {
        // store user information
        $permission = Permission::create([
            'guard_name' => 'web',
            'name' => $request->name,
        ]);

        if ($permission) {
            return $this->successResponse([
                'message' => 'Permission created succesfully!',
            ]);
        }

        return $this->failedResponse();
    }

    /**
     * Show Permission
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function show($id, Request $request): JsonResponse
    {
        $permission = Permission::with('roles')->find($id);

        if ($permission) {
            return $this->successResponse($permission);
        }

        return $this->failedResponse('Not found!');
    }

    /**
     * Delete Permission
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function delete($id, Request $request): JsonResponse
    {
        if ($permission = Permission::find($id)) {
            $permission->delete();

            return $this->successResponse([
                'message' => 'Permission has been deleted',
            ]);
        }

        return $this->failedResponse('Not found!');
    }
}
