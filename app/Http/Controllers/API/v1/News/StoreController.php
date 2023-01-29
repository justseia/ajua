<?php

namespace App\Http\Controllers\API\v1\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $news = News::create([
            'image' => $request->image,
            'url' => $request->url,
        ]);
        return response()->json($news);
    }
}
