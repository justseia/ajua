<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UpdateController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $birthday = Carbon::parse($request->birthday);
        if (!$request->birthday) {
            $birthday = null;
        }

        $request->birthday = $birthday;
        $user->update($request->all());

        if (!$user) {
            return response()->json(['message' => 'error'], 400);
        }
        return response()->json(['message' => 'success'], 200);
    }
}
