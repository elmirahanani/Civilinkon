<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\VolunteerActivity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VolunteerController extends Controller
{
    // Kategori laporan yang tersedia di form Report
    private const REPORT_CATEGORIES = [
        'trash_buildup' => 'Trash Buildup',
        'dirty_public_areas' => 'Dirty Public Areas',
        'improper_waste_disposal' => 'Improper Waste Disposal',
        'polluted_environment' => 'Polluted Environment',
        'waste_facilities' => 'Waste Facilities',
        'illegal_dumping' => 'Illegal Dumping',
    ];

    // Halaman Volunteer untuk warga
    public function index()
    {
        $activities = VolunteerActivity::where('status', 'published')
            ->whereDate('event_date', '>=', today())
            ->orderBy('event_date')
            ->get();

        return view('volunteer.index', compact('activities'));
    }

    // Halaman admin: daftar laporan yang dapat dijadikan kegiatan
    public function adminIndex()
    {
        $reports = Report::whereIn(
            'category',
            array_keys(self::REPORT_CATEGORIES)
        )->latest()->get();

        $activities = VolunteerActivity::with('report')
            ->latest()->get();

        return view('volunteer.admin', compact('reports', 'activities'));
    }

    // Admin membuat kegiatan dari laporan warga
    public function store(Request $request)
    {
        $validated = $request->validate([
            'report_id' => [
                'required',
                'exists:reports,id',
                Rule::unique('volunteer_activities', 'report_id'),
            ],
            'title' => 'required|string|max:150',
            'description' => 'required|string|max:1000',
            'category' => 'required|in:clean_up,reuse,sorting',
            'event_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'capacity' => 'required|integer|min:1|max:1000',
        ]);

        $report = Report::findOrFail($validated['report_id']);

        $validated['location'] = $report->location;
        $validated['status'] = 'published';

        VolunteerActivity::create($validated);

        return redirect()
            ->route('volunteer.admin')
            ->with('success', 'Volunteer activity berhasil dibuat.');
    }

    // Admin mengubah status kegiatan
    public function updateStatus(Request $request, VolunteerActivity $activity)
    {
        $validated = $request->validate([
            'status' => 'required|in:draft,published,completed,cancelled',
        ]);

        $activity->update($validated);

        return back()->with('success', 'Status kegiatan berhasil diperbarui.');
    }

    // Warga bergabung dengan kegiatan
    public function join(VolunteerActivity $activity)
    {
        if ($activity->status !== 'published') {
            return back()->with('error', 'Kegiatan ini tidak tersedia.');
        }

        if ($activity->event_date->isPast()) {
            return back()->with('error', 'Kegiatan sudah lewat.');
        }

        if ($activity->joined_count >= $activity->capacity) {
            return back()->with('error', 'Kuota volunteer sudah penuh.');
        }

        $activity->increment('joined_count');

        return back()->with('success', 'Kamu berhasil bergabung!');
    }
}
