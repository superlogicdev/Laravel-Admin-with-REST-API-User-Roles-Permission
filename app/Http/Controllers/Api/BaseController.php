<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * Success Response
     *
     * @param mixed|null $data
     * @param int $code
     * @param array $headers
     */
    protected function successResponse(mixed $data = null, int $code = 200, array $headers = [])
    {
        $content = [
            'status' => 'success',
            'data' => $data,
        ];

        return response()->json($content, $code, $headers);
    }

    /**
     * Failed Response
     *
     * @param string|null $message
     * @param mixed|null $data
     * @param int $code
     * @param array $headers
     */
    protected function failedResponse(
        string $message = null,
        mixed $data = null,
        int $code = 400,
        array $headers = []
    ) {
        $content = [
            'status' => 'failed',
            'data' => $data,
            'message' => $message ?? 'Something went wrong!',
        ];

        return response()->json($content, $code, $headers);
    }
}
