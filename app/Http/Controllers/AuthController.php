<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function Login(Request $request) {
        return response()->json([
            'status' => true,
            'message' => 'Login berhasil.'
        ], 200);
    }

    public function Register(Request $request) {
        $validated = $request->validate([
            'nisn' => 'required|string|min:10|max:10',
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:64',
            'dob' => 'required|date'
        ]);

        UserModel::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Register berhasil.'
        ], 201);
    }
}
