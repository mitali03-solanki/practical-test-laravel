<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $user->createToken('token')->plainTextToken;
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'invalid login']);
        }
        return ['token' => $user->createToken('token')->plainTextToken];
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
