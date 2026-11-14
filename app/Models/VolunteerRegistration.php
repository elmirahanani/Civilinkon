<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VolunteerRegistration extends Model
{
    protected $fillable = [
        'volunteer_activity_id',
        'full_name',
        'email',
        'phone',
        'motivation',
        'status',
    ];

    public function activity(): BelongsTo
    {
        return $this->belongsTo(
            VolunteerActivity::class,
            'volunteer_activity_id'
        );
    }
}
