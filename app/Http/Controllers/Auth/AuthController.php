<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {

            return response()->json([
                'status' => false,
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Login success',
            'data' => [
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]
        ]);
    }

    public function register(RegisterUserRequest $request)
    {
        $newUser = new CreateNewUser();

        $user = $newUser->create($request->only('name', 'email', 'password', 'password_confirmation'));

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Register success',
            'data' => [
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]
        ]);
    }
}
