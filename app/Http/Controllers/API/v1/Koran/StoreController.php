<?php

namespace App\Http\Controllers\API\v1\Koran;

use App\Http\Controllers\Controller;
use App\Models\Koran;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $koran = Koran::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'body' => $request->body,
            'translation' => $request->translation,
            'translit' => $request->translit,
            'audio' => $request->audio,
            'interpretation' => $request->interpretation,
        ]);

        if (!$koran) {
            return response()->json(['message' => 'error'], 400);
        }

        return response()->json($koran, 200);
    }
}
