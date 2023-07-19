<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidData extends Model
{
    protected $fillable = [
        'report_date',
        'total_cases',
        'new_cases',
        'total_deaths',
        'new_deaths',
        'total_recovered',
        'active_cases',
    ];
}
