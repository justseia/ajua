<?php

namespace App\Http\Controllers\API\v1\Koran;

use App\Http\Controllers\Controller;
use App\Models\Koran;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $korans = Koran::latest('id')->paginate(10);
        return response()->json($korans);
    }
}
