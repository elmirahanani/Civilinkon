<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReportStatusHistory extends Model
{
    protected $fillable = [
        'report_id',
        'status',
        'description',
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
}
