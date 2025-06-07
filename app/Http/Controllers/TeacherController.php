<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;
use App\Models\TokenModel;

class TeacherController extends Controller
{
    public function IsTeacher(String $token) {
        if (!$token) {
            return false;
        }
        $token = TokenModel::where('token', $token)->first();
        if (!$token) {
            return false;
        }
        $user = UserModel::find($token->user_id);
        if (!$user) {
            return false;
        }
        if ($user->type != 'teacher') {
            return false;
        }
        return true;
    }

    public function index(Request $request) {
        if (!$this->IsTeacher($request->cookie('session_token'))) {
            return redirect() -> route('login');
        }
        return view('pages.teacher_dashboard', [
            "meta" => [
                "showNavbar" => false,
                "showFooter" => false,
                "showSidebar" => true
            ]
        ]);
    }
}
