<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use App\Models\TokenModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Basic

    private function errorResponseWithCookie(string $message, int $status = 401)
    {
        $response = response()->json(['status' => false, 'message' => $message], $status);
        // Hapus cookie sebelumnya
        $response->cookie('session_token', '', -1);
        return $response;
    }

    public function Login(Request $request) {
        if ($request->has('nisn')) {
            // Login siswa
            $request->validate([
                'nisn' => 'required|digits:10',
                'password' => 'required|min:8|max:64'
            ]);
            $siswa = StudentModel::where('nisn', $request->nisn)->first();
            if (!$siswa) {
                return $this->errorResponseWithCookie('NISN tidak ditemukan');
            }
            if (!$siswa->user_id) {
                return $this->errorResponseWithCookie('User terkait tidak ditemukan');
            }
            $user = UserModel::find($siswa->user_id);
            if (!$user) {
                return $this->errorResponseWithCookie('User tidak ditemukan');
            }
            if (!Hash::check($request->password, $user->password)) {
                return $this->errorResponseWithCookie('Password salah');
            }
            $token = Str::random(32) . now()->format('YmdHis') . Str::random(32);
            TokenModel::updateOrCreate(
                ['user_id' => $user->id],
                ['token' => $token]
            );
            $response = response()->json(['status' => true, 'message' => 'Berhasil masuk sebagai siswa']);
            $response->cookie('session_token', $token, 60 * 24 * 7, null, null, true, true); // 7 hari
            return $response;
        } else if ($request->has('nik')) {
            // Login guru
            $request->validate([
                'nik' => 'required|digits:16',
                'password' => 'required|min:8|max:64'
            ]);
            $guru = TeacherModel::where('nik', $request->nik)->first();
            if (!$guru) {
                return $this->errorResponseWithCookie('NIK tidak ditemukan');
            }
            if (!$guru->user_id) {
                return $this->errorResponseWithCookie('User terkait tidak ditemukan');
            }
            $user = UserModel::find($guru->user_id);
            if (!$user) {
                return $this->errorResponseWithCookie('User tidak ditemukan');
            }
            if (!Hash::check($request->password, $user->password)) {
                return $this->errorResponseWithCookie('Password salah');
            }
            $token = Str::random(16) . now()->format('YmdHis') . Str::random(16);
            TokenModel::updateOrCreate(
                ['user_id' => $user->id],
                ['token' => $token]
            );
            $response = response()->json(['status' => true, 'message' => 'Berhasil masuk sebagai guru']);
            $response->cookie('session_token', $token, 60 * 24 * 7, null, null, true, true); // 7 hari
            return $response;
        } else {
            return $this->errorResponseWithCookie('Kredensial yang tidak valid');
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
            return $this->errorResponseWithCookie('Kredensial yang tidak valid');
        }
    }
}
