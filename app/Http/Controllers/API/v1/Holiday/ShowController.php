<?php

namespace App\Http\Controllers\API\v1\Holiday;

use App\Http\Controllers\Controller;
use App\Models\Holiday;

class ShowController extends Controller
{
    public function __invoke(Holiday $holiday)
    {
        if (!$holiday) {
            return response()->json(['message' => 'error'], 404);
        }
        return response()->json($holiday);
    }
}
