<?php

namespace App\Models;

use App\Models\DoctorCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    // Mass assignable attributes
    protected $fillable = [
        'name', 
        'email',
        'phone',
        'specialization',
        'profile_picture',
        'category_id', // Foreign key for the category
        'facebook', 
        'instagram', 
        'twitter', 
        'linkedin', 
        'youtube',
    ];

    /**
     * Get the category that the doctor belongs to.
     */
    public function category()
    {
        return $this->belongsTo(DoctorCategory::class, 'category_id');
    }
}
