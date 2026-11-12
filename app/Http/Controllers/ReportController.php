<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',

            'category' => [
                'required',
                'in:trash_buildup,dirty_public_areas,improper_waste_disposal,polluted_environment,waste_facilities,illegal_dumping',
            ],

            'description' => 'required|string|max:500',
            'location' => 'required|string|max:255',
            'urgency' => 'required|in:low,medium,high',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        do {
            $trackingCode = 'CVL-' . strtoupper(Str::random(10));
        } while (
            Report::where('tracking_code', $trackingCode)->exists()
        );

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')
                ->store('reports', 'public');
        }

        Report::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'location' => $validated['location'],
            'urgency' => $validated['urgency'],
            'photo' => $photoPath,
            'tracking_code' => $trackingCode,
            'status' => 'submitted',
        ]);

        return redirect()
            ->route('reports.create')
            ->with(
                'success',
                'Laporan berhasil dikirim! Kode pelacakan: ' . $trackingCode
            );
    }
}
