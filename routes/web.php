
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;

// Redirect halaman utama
Route::get('/', function () {
    return redirect('/login');
});

// Login dan Register
Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

// Reports
Route::get('/report', [ReportController::class, 'create'])
    ->name('reports.create');

Route::post('/report', [ReportController::class, 'store'])
    ->name('reports.store');
