<?php

namespace App\Http\Controllers\API\v1\Holiday;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
