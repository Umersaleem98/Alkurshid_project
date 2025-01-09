<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorCategory extends Model
{
    use HasFactory;

    protected $table = 'doctor_categories';

    // Mass assignable attributes
    protected $fillable = [
        'name', 
        'description',
    ];


    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'category_id');
    }
}
