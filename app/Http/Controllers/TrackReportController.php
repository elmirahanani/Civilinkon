<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class TrackReportController extends Controller
{
    public function index()
    {
        return view('track.index');
    }

    public function track(Request $request)
    {
        $validated = $request->validate([
            'tracking_code' => ['required', 'string'],
        ]);

        $trackingCode = strtoupper(trim($validated['tracking_code']));

        $report = Report::where('tracking_code', $trackingCode)
            ->with(['statusHistories' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->first();

        if (!$report) {
            return back()
                ->withInput()
                ->with('error', 'Tracking code tidak ditemukan. Periksa kembali kode laporan kamu.');
        }

        session(['recent_tracking_code' => $trackingCode]);

        return view('track.result', compact('report'));
    }

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
