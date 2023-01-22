<?php

namespace App\Http\Controllers\API\v1\Zikr;

use App\Http\Controllers\Controller;
use App\Models\Zikr;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Zikr $zikr)
    {
        return response()->json($zikr);
    }
}
