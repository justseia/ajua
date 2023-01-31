<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user->verification_code == (string)$request->code) {
            $user->email_verified_at = now();
            $user->verification_code = null;
            $user->save();
        } else {
            return response()->json(['status' => 'error'], 400);
        }

        return response()->json(['status' => 'success']);
    }
}
