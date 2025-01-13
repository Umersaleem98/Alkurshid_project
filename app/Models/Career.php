<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_name',
        'description',
        'requirements',
        'standard_level',
        'application_deadline',
        'department',
        'job_type',
        'salary_range',
        'status',
    ];
}
