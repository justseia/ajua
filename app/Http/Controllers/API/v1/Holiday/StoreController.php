<?php

namespace App\Http\Controllers\API\v1\Holiday;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $date = Carbon::parse($request->date);

        $holiday = Holiday::create([
            'name' => $request->name,
            'date' => $date,
        ]);
        return response()->json($holiday);
    }
}
