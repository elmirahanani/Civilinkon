
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TrackReportController;


// halaman utama
Route::get('/', function () {
    return redirect()->route('login');
});

// login
Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

// register / signup
Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

// form laporan
Route::get('/report', [ReportController::class, 'create'])
    ->name('reports.create');

// proses penyimpanan laporan
Route::post('/report', [ReportController::class, 'store'])
    ->name('reports.store');

// track report
Route::get('/track', [TrackReportController::class, 'index'])
    ->name('track.index');

Route::post('/track', [TrackReportController::class, 'track'])
    ->name('track.search');

Route::get('/track/{trackingCode}/progress', [TrackReportController::class, 'progress'])
    ->name('track.progress');

