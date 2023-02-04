<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $user = $user->makeHidden(
            'email_verified_at',
            'verification_code'
        );
        return response()->json($user);
    }
}
