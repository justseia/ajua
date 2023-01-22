<?php

namespace App\Http\Controllers\API\v1\Zikr;

use App\Http\Controllers\Controller;
use App\Models\Zikr;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $korans = Zikr::latest('id')
            ->select(
                'id',
                'name',
                'designation',
            )
            ->paginate(10);
        return response()->json($korans);
    }
}
