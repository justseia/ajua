<?php

namespace App\Http\Controllers\API\v1\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class ShowController extends Controller
{
    public function __invoke(News $news)
    {
        return response()->json($news);
    }
}
