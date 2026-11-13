<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'location',
        'urgency',
        'photo',
        'tracking_code',
        'status',
        'admin_notes',
    ];

    public function statusHistories(): HasMany
    {
        return $this->hasMany(ReportStatusHistory::class);
    }
}
