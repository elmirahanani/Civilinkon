<?php

namespace App\Http\Controllers;

use App\Models\Report;

class IssueMapController extends Controller
{
    // menampilkan halaman Issue Map
    public function index()
    {
        return view('admin.issue-map');
    }

    // mengirim data laporan untuk marker pada peta
    public function data()
    {
        $reports = Report::query()
            ->select([
                'id',
                'title',
                'category',
                'location',
                'urgency',
                'status',
                'tracking_code',
                'created_at',
            ])
            ->whereNotNull('location')
            ->where('location', '!=', '')
            ->latest()
            ->get();

        return response()->json([
            'reports' => $reports,
            'total' => $reports->count(),
            'last_updated' => now()->format('d M Y, H:i:s'),
        ]);
    }
}
