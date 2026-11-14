<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DashboardVolunteer extends Model
{
    protected $fillable = [
        'name',
        'place',
        'category',
        'amount',
        'status',
        'avatar',
    ];
}
