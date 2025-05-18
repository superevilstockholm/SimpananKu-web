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

    private function checkUserAlreadyExists($credentials) {
        if (!empty($credentials['email']) && UserModel::where('email', $credentials['email'])->exists()) {
            return true;
        }
        if (!empty($credentials['nisn'])) {
            $student = StudentModel::where('nisn', $credentials['nisn'])->first();
            if ($student && $student->user_id !== null) {
                return true;
            }
        }
        if (!empty($credentials['nik'])) {
            $teacher = TeacherModel::where('nik', $credentials['nik'])->first();
            if ($teacher && $teacher->user_id !== null) {
                return true;
            }
        }
        return false;
    }

    private function registerUser($request, $role) {
        if ($role == 'student') {
            $request->validate([
                'nisn' => 'required|digits:10',
                'dob' => 'required|date',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|max:64'
            ]);
        } else if ($role == 'teacher') {
            $request->validate([
                'nik' => 'required|digits:16',
                'dob' => 'required|date',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|max:64'
            ]);
        }

        if ($this->checkUserAlreadyExists($request->all())) {
            return $this->errorResponseWithCookie('User sudah terdaftar');
        }

        if ($role == 'student') {
            if ($request->dob != StudentModel::where('nisn', $request->nisn)->first()->dob) {
                return $this->errorResponseWithCookie('Tanggal lahir tidak sesuai');
            }
        } else if ($role == 'teacher') {
            if ($request->dob != TeacherModel::where('nik', $request->nik)->first()->dob) {
                return $this->errorResponseWithCookie('Tanggal lahir tidak sesuai');
            }
        }

        if ($role == 'student') {
            $user = UserModel::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'student'
            ]);
            StudentModel::where('nisn', $request->nisn)->update([
                'user_id' => $user->id
            ]);
            return response()->json(['status' => true, 'message' => 'Berhasil mendaftar sebagai siswa']);
        } else if ($role == 'teacher') {
            $user = UserModel::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'teacher'
            ]);
            TeacherModel::where('nik', $request->nik)->update([
                'user_id' => $user->id
            ]);
            return response()->json(['status' => true, 'message' => 'Berhasil mendaftar sebagai guru']);
        }
    }

    public function Register(Request $request) {
        if ($request->has('nisn')) {
            return $this->registerUser($request, 'student');
        } else if ($request->has('nik')) {
            return $this->registerUser($request, 'teacher');
        } else {
            return $this->errorResponseWithCookie('Kredensial yang tidak valid');
        }
    }
}
