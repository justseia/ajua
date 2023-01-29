<?php

namespace App\Http\Controllers\API\v1\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::latest('id')
            ->paginate(10);
        return response()->json($news);
    }
}
