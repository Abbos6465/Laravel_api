<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
   public function login(LoginRequest $request)
   {
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return response()->json([
        "token"=>$user->createToken($request->email)->plainTextToken
    ]);
   }

   public function logout(Request $request)
   {
        $request->users()->currentAccessToken()->delete();
        
        return response(["Log out"]);
   }

   public function register(RegisterRequest $request)
   {
    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
    ]);

    $token = $user->createToken($user->first_name)->plainTextToken;

    return response(['user'=>$user,'token'=>$token]);
   }
}
