
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\TrackReportController;

// Halaman utama
Route::get('/', function () {
    return redirect()->route('login');
});

// Login
Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

// Register
Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

// Form laporan
Route::get('/report', [ReportController::class, 'create'])
    ->name('reports.create');

// Proses penyimpanan laporan
Route::post('/report', [ReportController::class, 'store'])
    ->name('reports.store');

// Report Submitted Successfully
Route::get('/report/success', function () {
    $trackingCode = session('trackingCode');

    if (!$trackingCode) {
        return redirect()->route('reports.create');
    }

    return view('reports.success', compact('trackingCode'));
})->name('reports.success');

// Track Report
Route::get('/track', [TrackReportController::class, 'index'])
    ->name('track.index');

Route::post('/track', [TrackReportController::class, 'track'])
    ->name('track.search');

// Track Report Progress
Route::get('/track/{trackingCode}/progress', [TrackReportController::class, 'progress'])
    ->name('track.progress');

// Volunteer Page
Route::get('/volunteer', [VolunteerController::class, 'index'])
    ->name('volunteer.index');

// Volunteer Registration
Route::post('/volunteer/{activity}/join', [VolunteerController::class, 'join'])
    ->name('volunteer.join');

// Admin Volunteer Management
Route::get('/admin/volunteer', [VolunteerController::class, 'adminIndex'])
    ->name('volunteer.admin');

Route::post('/admin/volunteer', [VolunteerController::class, 'store'])
    ->name('volunteer.store');

Route::patch('/admin/volunteer/{activity}/status', [VolunteerController::class, 'updateStatus'])
    ->name('volunteer.status');
