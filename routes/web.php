<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Models\TokenModel;


URL::forceScheme('http');

function IsLoggedIn(string $user_token) {
    if (!$user_token) {
        return false;
    }
    $token = TokenModel::where('token', $user_token)->first();
    if (!$token) {
        return false;
    }
    return true;
}

// Views

Route::get('/', function () {
    return view('pages.index', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
}) -> name('home');

Route::get('/features', function () {
    return view('pages.features', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
}) -> name('features');

Route::get('/about', function () {
    return view('pages.about', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
}) -> name('about');

Route::get('/login', function (Request $request) {
    if ($request->cookie('session_token') && IsLoggedIn($request->cookie('session_token'))) {
        return redirect() -> route('dashboard');
    }
    return view('pages.login', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
}) -> name('login');

Route::get('/register', function (Request $request) {
    if ($request->cookie('session_token') && IsLoggedIn($request->cookie('session_token'))) {
        return redirect() -> route('dashboard');
    }
    return view('pages.register', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
}) -> name('register');

Route::get('dashboard', function (Request $request) {
    if (!$request->cookie('session_token') || !IsLoggedIn($request->cookie('session_token'))) {
        return redirect() -> route('login');
    }
    return view('pages.dashboard', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
}) -> name('dashboard');

// Api
Route::middleware('throttle:5,1')->group(function () {
    // Rate Limitter
    Route::post('/api/login', [AuthController::class, 'Login']) -> name('api_login');
    Route::post('/api/register', [AuthController::class, 'Register']) -> name('api_register');
});

Route::get('/transaksi', function () {
    return view('pages.transaksi ', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
});

Route::get('/api/counting/statistics', [MainController::class, 'StatisticCounting']) -> name('api');
