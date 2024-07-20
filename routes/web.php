<?php
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// Route::get('/', function () {
//     return view('welcome');
// });
