<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

URL::forceScheme('http');

// Views

Route::get('/', function () {
    return view('pages.index', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true,
            "showSidebar" => false
        ]
    ]);
}) -> name('home');

Route::get('/features', function () {
    return view('pages.features', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true,
            "showSidebar" => false
        ]
    ]);
}) -> name('features');

Route::get('/about', function () {
    return view('pages.about', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true,
            "showSidebar" => false
        ]
    ]);
}) -> name('about');

Route::get('/login', [AuthController::class, 'LoginIndex']) -> name('login');

Route::get('/register', [AuthController::class, 'RegisterIndex']) -> name('register');

Route::get('/dashboard/student', [StudentController::class, 'index']) -> name('student_dashboard');

Route::get('/dashboard/teacher', [TeacherController::class, 'index']) -> name('teacher_dashboard');

// Api
Route::middleware('throttle:5,1')->group(function () {
    // Rate Limitter
    Route::post('/api/login', [AuthController::class, 'Login']) -> name('api_login');
    Route::post('/api/register', [AuthController::class, 'Register']) -> name('api_register');
    Route::delete('/api/logout', [AuthController::class, 'Logout']) -> name('api_logout');
});

Route::get('/transaksi', function () {
    return view('pages.transaksi ', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => true
        ]
    ]);
});

Route::get('/tabungan', function () {
    return view('pages.tabungan', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => true
        ]
    ]);
});

Route::get('/api/counting/statistics', [MainController::class, 'StatisticCounting']) -> name('api');
