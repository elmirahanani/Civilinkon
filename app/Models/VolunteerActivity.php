<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VolunteerActivity extends Model
{
    protected $fillable = [
        'report_id',
        'title',
        'description',
        'category',
        'location',
        'event_date',
        'start_time',
        'end_time',
        'capacity',
        'joined_count',
        'status',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(VolunteerRegistration::class);
    }

    public function getSpotsLeftAttribute(): int
    {
        return max(0, $this->capacity - $this->joined_count);
    }
}
