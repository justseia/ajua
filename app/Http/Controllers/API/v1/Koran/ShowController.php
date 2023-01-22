<?php

namespace App\Http\Controllers\API\v1\Koran;

use App\Http\Controllers\Controller;
use App\Models\Koran;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Koran $koran)
    {
        return response()->json($koran);
    }
}
