<?php

namespace App\Exceptions;

use Exception;

class ApiFailedException extends Exception
{
    public function __construct(protected $errors)
    {
    }

    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        $content = [
            'status' => 'failed',
            'data' => $this->errors,
            'message' => 'Validation Error',
        ];

        return response()->json($content, 400, []);
    }
}
