<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login(Request $request) {
        return response()->json([
            'status' => 'success',
            'message' => 'Login berhasil',
            'data' => [
                'username' => $request->username
            ]
        ]);
    }

    public function Register(Request $request) {
        return response()->json([
            'status' => 'success',
            'message' => 'Login berhasil',
            'data' => [
                'username' => $request->username
            ]
        ]);
    }
}
