<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class Controller
{
    public function respondSuccess($data, $message = "ok"): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'success' => true,
            'message' => $message,
        ], 200);
    }

    public function respondError($message): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'trace' => [],
        ], 400);
    }
}
