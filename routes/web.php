
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;

// Halaman utama
Route::get('/', function () {
    return redirect()->route('login');
});

// Login
Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

// Register / Signup
Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

// Form laporan
Route::get('/report', [ReportController::class, 'create'])
    ->name('reports.create');

// Proses penyimpanan laporan
Route::post('/report', [ReportController::class, 'store'])
    ->name('reports.store');
