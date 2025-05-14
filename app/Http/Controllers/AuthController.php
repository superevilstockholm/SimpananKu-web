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
            $validate = $request->validate([
                'nisn' => 'required|digits:10',
                'password' => 'required|min:8|max:64'
            ]);
            return response()->json(['status' => true, 'message' => 'Berhasil masuk sebagai siswa']);
        } else if ($request->has('nik')) {
            // Login guru
            $validate = $request->validate([
                'nik' => 'required|digits:16',
                'password' => 'required|min:8|max:64'
            ]);
            return response()->json(['status' => true, 'message' => 'Berhasil masuk sebagai guru']);
        } else {
            return response()->json(['status'=> false, 'message' => 'kredensial yang tidak valid'], 401);
        }
    }

    public function Register(Request $request) {
        if ($request->has('nisn')) {
            // Daftar siswa
            return response()->json(['status' => true, 'message' => 'Berhasil mendaftar sebagai siswa']);
        } else if ($request->has('nik')) {
            // Daftar guru
            return response()->json(['status' => true, 'message' => 'Berhasil mendaftar sebagai guru']);
        } else {
            return response()->json(['status'=> false, 'message' => 'kredensial yang tidak valid'], 401);
        }
    }
}
