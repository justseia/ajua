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
            'body' => $request->body,
            'translation' => $request->translation,
            'translit' => $request->translit,
            'audio' => $request->audio,
            'description' => $request->description,
        ]);
        return response()->json($koran);
    }
}
