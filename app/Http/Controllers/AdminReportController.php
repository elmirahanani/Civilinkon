<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    // Menampilkan daftar laporan admin
    public function index(Request $request)
    {
        $query = Report::query();

        // Search berdasarkan ID, judul, kategori, lokasi, atau tracking code
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('id', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('tracking_code', 'like', "%{$search}%");
            });
        }

        // Filter kategori
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter prioritas
        if ($request->filled('priority')) {
            $query->where('urgency', $request->priority);
        }

        $reports = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $categories = Report::query()
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('admin.reports.index', compact(
            'reports',
            'categories'
        ));
    }

    // Menampilkan detail laporan
    public function show(Report $report)
    {
        $report->load('statusHistories');

        return view('admin.reports.show', compact('report'));
    }
}
