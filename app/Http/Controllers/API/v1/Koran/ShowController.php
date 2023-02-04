<?php

namespace App\Http\Controllers\API\v1\Koran;

use App\Http\Controllers\Controller;
use App\Models\Koran;

class ShowController extends Controller
{
    public function __invoke(Koran $koran)
    {
        if (!$koran) {
            return response()->json(['message' => 'error'], 404);
        }
        return response()->json($koran, 200);
    }
}
