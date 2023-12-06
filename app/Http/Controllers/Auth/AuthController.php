<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;

        $user = User::Create([
            'user_name' => $name,
            'user_email'=>$email,
            'user_password'=>Hash::make($password)
        ]);
        $token = JWTAuth::fromUser($user);

        
        return response()->json([
            'user'=>$user,
            'token'=>$token
        ],201);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('user_email', 'password');
        if (!$token = JWTAuth::attempt($credentials)) {
            var_dump($token);
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        return response()->json([
            'success' => true,
            'access_token' => $token,
        ]);
    }
    
}
