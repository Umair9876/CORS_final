<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PassportAuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            $user = User::create([
                'name' => 'Test',
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $token = $user->createToken('LaravelAuthApp')->accessToken;

            return response()->json(['token' => $token], 200);
        } catch (\Exception $exception){
            return ['error' => $exception->getMessage()];
        }
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    public function userDetail() {
        $user       =       Auth::user();
        return response()->json(['success' => $user], $this->success_status);
    }
}
