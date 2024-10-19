<?php

namespace Modules\OpenAI\Http\Controllers\Api\v2\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\OpenAI\Services\v2\FeaturePreferenceService;
use Illuminate\Http\{
    JsonResponse,
    Response
};

class FeaturePreferenceController extends Controller
{
    public function featureOptions(Request $request): JsonResponse
    {
        $data = (new FeaturePreferenceService())->processData($request->options);
        return response()->json(['data' => $data], Response::HTTP_OK);
    }
}