<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;
use App\Models\TeacherModel;
use App\Models\TransactionModel;

class MainController extends Controller
{
    public function StatisticCounting() {
        return response()->json([
            'total_user' => UserModel::count(),
            'total_guru' => TeacherModel::count(),
            'total_transaksi' => TransactionModel::count()
        ]);
    }
}
