<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;
use App\Models\TokenModel;

class StudentController extends Controller
{
    public function IsStudent(String $token) {
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
        if ($user->type != 'student') {
            return false;
        }
        return true;
    }

    public function index(Request $request) {
        if (!$this->IsStudent($request->cookie('session_token'))) {
            return redirect() -> route('login');
        }
        return view('pages.student_dashboard', [
            "meta" => [
                "showNavbar" => false,
                "showFooter" => false,
                "showSidebar" => true
            ]
        ]);
    }
}
