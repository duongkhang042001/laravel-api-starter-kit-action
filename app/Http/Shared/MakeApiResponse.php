<?php

namespace App\Http\Shared;

use Illuminate\Http\JsonResponse;

trait MakeApiResponse
{
    protected function makeResponse(string|array $message, string $status, int $code = 200, array $data = []): JsonResponse
    {
        $responseData = ['status' => $status, 'message' => $message];

        $responseData = array_merge($responseData, $data);

        return response()->json($responseData, $code);
    }

    public function successResponse(string|array $message, array $data = [],  int $code = 200): JsonResponse
    {
        return $this->makeResponse($message, 'success', $code, $data);
    }

    public function errorResponse(string|array $message,  array $data = [], int $code): JsonResponse
    {
        return $this->makeResponse($message, 'error', $code, $data);
    }
}
