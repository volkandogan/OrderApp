<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {

            $user = Auth::user();

            $success['token'] = $user->createToken('AppName')->accessToken;
            return response()->json(['success' => $success], 200);
        } else {

            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
