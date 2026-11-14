
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TrackReportController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\IssueMapController;


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

// admin dashboard (sementara tanpa login)
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/dashboard/data', [AdminDashboardController::class, 'data'])
    ->name('admin.dashboard.data');

// admin Reports
Route::get('/admin/reports', [AdminReportController::class, 'index'])
    ->name('admin.reports.index');

Route::get('/admin/reports/{report}', [AdminReportController::class, 'show'])
    ->name('admin.reports.show');

// admin issue map
Route::get('/admin/issue-map', [IssueMapController::class, 'index'])
    ->name('admin.issue-map');

Route::get('/admin/issue-map/data', [IssueMapController::class, 'data'])
    ->name('admin.issue-map.data');

