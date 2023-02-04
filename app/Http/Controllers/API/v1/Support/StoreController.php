<?php

namespace App\Http\Controllers\API\v1\Support;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $support = Support::create([
            'user_id' => $request->user_id,
            'message' => $request->message,
        ]);

        if (!$support) {
            return response()->json(['message' => 'error'], 400);
        }

        return response()->json(['message' => 'success'], 200);
    }
}
