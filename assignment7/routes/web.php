<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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
    Route::get('/', [PostController::class,'index'])->name('home');
    Route::get('/profile', [AuthController::class,"showprofile"])->name('profile');
    Route::get('/edit-profile', [AuthController::class,"editprofile"])->name('editprofile');
    Route::put('/update-profile', [AuthController::class,"update"])->name('updateprofile');
    Route::get("/log-out", [AuthController::class, "logout"])->name("logout");

    // post crud
    Route::post('/create-post', [PostController::class,'store'])->name('createpost');
    Route::get('/post/{id}', [PostController::class,'show'])->name('singlepost');
    Route::get('/post/{id}/edit', [PostController::class,'edit'])->name('editpost');
    Route::put('/post/{id}/update', [PostController::class,'update'])->name('updatepost');
    Route::delete('/post/{id}/delete', [PostController::class,'destroy'])->name('deletepost');
});
