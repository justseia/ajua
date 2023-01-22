<?php

namespace App\Http\Controllers\API\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::latest('id')->paginate(10);
        return response()->json($users);
    }
}
