<?php

namespace App\Http\Controllers\API\v1\Namaz;

use App\Http\Controllers\Controller;
use App\Models\Namaz;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request, Namaz $namaz)
    {

        $namaz = Namaz::where('id', 1)->get();
//        $namazz =2
        return response()->json($namaz);
    }
}
