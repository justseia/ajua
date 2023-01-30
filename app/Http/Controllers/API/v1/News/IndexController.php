<?php

namespace App\Http\Controllers\API\v1\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::latest('id')->get();
        return response()->json(['data' => $news]);
    }
}
