<?php

namespace App\Http\Controllers\API\v1\Support;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Support $support)
    {
        if (!$support) {
            return response()->json(['message' => 'error'], 404);
        }
        return response()->json($support, 200);
    }
}
