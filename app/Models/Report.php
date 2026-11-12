<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}