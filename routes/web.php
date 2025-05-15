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

Route::get('/login', function () {
    return view('pages.login', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
}) -> name('login');

Route::get('/register', function () {
    return view('pages.register', [
        "meta" => [
            "showNavbar" => false,
            "showFooter" => false
        ]
    ]);
}) -> name('register');

Route::get('dashboard', function () {
    return view('pages.dashboard', [
        "meta" => [
            "showNavbar" => true,
            "showFooter" => true
        ]
    ]);
}) -> name('dashboard');

// Api

Route::post('/api/login', [AuthController::class, 'Login']) -> name('api_login');
Route::post('/api/register', [AuthController::class, 'Register']) -> name('api_register');
