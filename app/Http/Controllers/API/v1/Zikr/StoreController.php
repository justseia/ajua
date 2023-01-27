<?php

namespace App\Http\Controllers\API\v1\Zikr;

use App\Http\Controllers\Controller;
use App\Models\Zikr;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $zikr = Zikr::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'body' => $request->body,
            'transcription' => $request->transcription,
            'audio' => $request->audio,
        ]);
        return response()->json($zikr);
    }
}
