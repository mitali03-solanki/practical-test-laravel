<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        // for list
        return User::latest()->get();
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'user',
            'phone' => $request->phone,
        ]);
        return response()->json($user);
    }
    public function show($id)
    {
        return User::with('qualifications')->findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email', 'role', 'phone'));
        return response()->json([
            $user
        ]);
    }
    public function delete(Request $request, $id)
    {
        User::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Delete succesfully'
        ]);
    }
}
