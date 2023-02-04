<?php

namespace App\Http\Controllers\API\v1\Support;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $support = Support::latest('id')->simplePaginate(10);
        return response()->json($support, 200);
    }
}
