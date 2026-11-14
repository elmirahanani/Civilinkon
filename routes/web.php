
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TrackReportController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\IssueMapController;
use App\Http\Controllers\VolunteerController;

// Landing sementara
Route::get('/', function () {
    return view('landing');
});

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Public pages
Route::get('/report', [ReportController::class, 'create'])->name('reports.create');
Route::post('/report', [ReportController::class, 'store'])->name('reports.store');

Route::get('/track', [TrackReportController::class, 'index'])->name('track.index');
Route::post('/track', [TrackReportController::class, 'track'])->name('track.search');
Route::get('/track/{trackingCode}/progress', [TrackReportController::class, 'progress'])->name('track.progress');

Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');
Route::post('/volunteer/{activity}/join', [VolunteerController::class, 'join'])->name('volunteer.join');

// Admin pages
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/data', [AdminDashboardController::class, 'data'])->name('admin.dashboard.data');

Route::get('/admin/reports', [AdminReportController::class, 'index'])->name('admin.reports.index');
Route::get('/admin/reports/{report}', [AdminReportController::class, 'show'])->name('admin.reports.show');

Route::get('/admin/issue-map', [IssueMapController::class, 'index'])->name('admin.issue-map');
Route::get('/admin/issue-map/data', [IssueMapController::class, 'data'])->name('admin.issue-map.data');

