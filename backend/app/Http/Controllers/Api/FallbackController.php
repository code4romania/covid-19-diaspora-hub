<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class FallbackController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'message' => __('api.response.endpointNotFound'),
        ], 404);
    }
}
