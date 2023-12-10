<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/projects', [PageController::class,'showProjectPage'])->name('projects');
Route::get('/projects-details/{id}', [PageController::class,'showProjectDetailsPage'])->name('projectsDetails');
Route::get('/experience', [PageController::class,'showExperiencePage'])->name('experience');

