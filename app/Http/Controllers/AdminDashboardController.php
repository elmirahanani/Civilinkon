<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    // menampilkan halaman dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    // mengambil data dashboard dalam format JSON
    public function data()
    {
        $reports = Report::query();

        // statistik utama
        $totalReports = (clone $reports)->count();

        $pendingReports = (clone $reports)
            ->where('status', 'submitted')
            ->count();

        $inProgressReports = (clone $reports)
            ->where('status', 'in_progress')
            ->count();

        $resolvedReports = (clone $reports)
            ->where('status', 'resolved')
            ->count();

        // data grafik berdasarkan bulan pada tahun berjalan
        $year = now()->year;

        $received = Report::query()
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->pluck('total', 'month');

        $resolved = Report::query()
            ->selectRaw('MONTH(updated_at) as month, COUNT(*) as total')
            ->where('status', 'resolved')
            ->whereYear('updated_at', $year)
            ->groupByRaw('MONTH(updated_at)')
            ->pluck('total', 'month');

        $months = [
            'Jan', 'Feb', 'Mar', 'Apr',
            'Mei', 'Jun', 'Jul', 'Agu',
            'Sep', 'Okt', 'Nov', 'Des',
        ];

        $receivedData = [];
        $resolvedData = [];

        for ($month = 1; $month <= 12; $month++) {
            $receivedData[] = (int) ($received[$month] ?? 0);
            $resolvedData[] = (int) ($resolved[$month] ?? 0);
        }

        // kategori laporan terbanyak
        $categories = Report::query()
            ->select('category', DB::raw('COUNT(*) as total'))
            ->groupBy('category')
            ->orderByDesc('total')
            ->limit(6)
            ->get();

        // lokasi dengan jumlah laporan terbanyak
        $hotspots = Report::query()
            ->select(
                'location',
                DB::raw('COUNT(*) as total'),
                DB::raw("SUM(CASE WHEN urgency = 'high' THEN 1 ELSE 0 END) as high_urgency")
            )
            ->groupBy('location')
            ->orderByDesc('total')
            ->limit(4)
            ->get();

        return response()->json([
            'stats' => [
                'total' => $totalReports,
                'pending' => $pendingReports,
                'in_progress' => $inProgressReports,
                'resolved' => $resolvedReports,
            ],

            'chart' => [
                'labels' => $months,
                'received' => $receivedData,
                'resolved' => $resolvedData,
            ],

            'categories' => $categories,

            'hotspots' => $hotspots,

            'last_updated' => now()->format('d M Y, H:i:s'),
        ]);
    }
}
