<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class TrackReportController extends Controller
{
    // menampilkan halaman Track Report
    public function index()
    {
        return view('track.index');
    }

    // mencari laporan berdasarkan tracking code
    public function track(Request $request)
    {
        $validated = $request->validate([
            'tracking_code' => ['required', 'string'],
        ]);

        $report = Report::where(
            'tracking_code',
            $validated['tracking_code']
        )->first();

        if (!$report) {
            return back()
                ->withInput()
                ->with('error', 'Tracking code tidak ditemukan.');
        }

        return view('track.result', compact('report'));
    }

    // mengambil progres terbaru untuk polling
    public function progress(string $trackingCode)
    {
        $report = Report::where('tracking_code', $trackingCode)
            ->with(['statusHistories' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->first();

        if (!$report) {
            return response()->json([
                'message' => 'Report tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'tracking_code' => $report->tracking_code,
            'status' => $report->status,
            'admin_notes' => $report->admin_notes,
            'updated_at' => $report->updated_at,
            'histories' => $report->statusHistories,
        ]);
    }
}
