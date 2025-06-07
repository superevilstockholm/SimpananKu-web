<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
