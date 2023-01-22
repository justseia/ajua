<?php

namespace App\Http\Controllers\API\v1\Holiday;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $holidays = Holiday::latest('id')->paginate(10);
        return response()->json($holidays);
    }
}
