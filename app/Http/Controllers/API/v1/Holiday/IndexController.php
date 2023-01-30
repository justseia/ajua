<?php

namespace App\Http\Controllers\API\v1\Holiday;

use App\Http\Controllers\Controller;
use App\Models\Holiday;

class IndexController extends Controller
{
    public function __invoke()
    {
        $holidays = Holiday::all();
        $holidays = $holidays->groupBy(function ($holiday) {
            $date = new \DateTime($holiday->date);
            return $date->format('F');
        });
        return response()->json($holidays);
    }
}
