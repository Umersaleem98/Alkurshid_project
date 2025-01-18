<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;


    protected $table = 'testimonials';

    protected $fillable = [
        'name',        // Name of the person giving the testimonial
        'designation', // Designation (e.g., CEO & Founder)
        'image',       // Path to the testimonial image
        'quote',       // The testimonial text
    ];
}
