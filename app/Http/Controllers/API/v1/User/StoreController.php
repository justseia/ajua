<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $birthday = Carbon::parse($request->birthday);
        if (!$request->birthday) {
            $birthday = null;
        }

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'gender' => $request->gender,
            'email' => $request->email,
            'birthday' => $birthday,
            'verification_code' => fake()->numberBetween(1000, 9999),
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user->verification_code));

        return response()->json($user);
    }
}
