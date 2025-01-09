<?php

namespace App\Http\Controllers\Home\Doctors;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\DoctorCategory;
use App\Http\Controllers\Controller;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('templates.pages.doctors.doctors',compact('doctors'));
    }
   
    public function AboutDoctor($id)
{
    $doctor = Doctor::with('category')->findOrFail($id); // Use `with` for eager loading the category
    $categories = DoctorCategory::all(); // Fetch all categories
    return view('templates.pages.Doctors.aboutdoctor', compact('doctor', 'categories'));
}
}
