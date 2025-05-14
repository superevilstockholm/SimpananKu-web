<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


URL::forceScheme('http');

// Views

Route::get('/', function () {
    return view('pages.index', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
});

Route::get('/features', function () {
    return view('pages.features', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
});

Route::get('/about', function () {
    return view('pages.about', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
});

Route::get('/login', function () {
    return view('pages.login', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
});

Route::get('/register', function () {
    return view('pages.register', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
});

// Api

Route::post('/api/login', [AuthController::class, 'Login']) -> name('api_login');
Route::post('/api/register', [AuthController::class, 'Register']) -> name('api_register');
