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

        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'required',
            'date' => 'required',
        ]);

        if ($validatedData->fails()) {
            return response()->json($validatedData->errors(), 400);
        }

        $date = Carbon::parse($request->date);
        $photo = $request->file('photo');
        $photoName = time() . '.png';
        $img = Image::make($photo->getRealPath());
        $img->fit(500, 270)->encode('png');
        $img->save(public_path('images/' . $photoName));

        $url = request()->getSchemeAndHttpHost() . '/images/' . $photoName;

        $holiday = Holiday::create([
            'name' => $request->name,
            'photo' => $url,
            'date' => $date,
        ]);
        return response()->json($holiday);
    }
}
