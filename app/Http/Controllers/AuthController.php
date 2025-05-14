<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login(Request $request) {
        if ($request->has('nisn')) {
            // Login siswa
        } else if ($request->has('nik')) {
            // Login guru
        } else {
            return response()->json(['status'=> false, 'message' => 'Login Failed. Invalid Credentials'], 401);
        }
    }

    public function Register(Request $request) {
        if ($request->has('nisn')) {
            // Daftar siswa
        } else if ($request->has('nik')) {
            // Daftar guru
        } else {
            return response()->json(['status'=> false, 'message' => 'Login Failed. Invalid Credentials'], 401);
        }
    }
}
