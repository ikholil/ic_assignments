<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});

Route::post("/register-user", [AuthController::class, "registerUser"])->name("registeruser");
Route::post("/login-user", [AuthController::class, "loginUser"])->name("loginUser");

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/edit-profile', function () {
        return view('edit-profile');
    });
    Route::get("/log-out", [AuthController::class, "logout"])->name("logout");
});
