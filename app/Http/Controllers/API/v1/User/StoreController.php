<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $birthday = Carbon::parse($request->date);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'number' => $request->number,
            'birthday' => $birthday,
        ]);
        return response()->json($user);
    }
}
