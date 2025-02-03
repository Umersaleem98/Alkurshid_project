<?php

namespace App\Http\Controllers\Home;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
{
    
    $services = Service::all();

        // Get all testimonials
        $testimonials = Testimonial::all();

        // Paginate doctors, 8 per page
        $doctors = Doctor::paginate(8);

        // Get total count of doctors
        $doctorCount = Doctor::count();

        // Pass data to the view
        return view('index', compact('doctors', 'testimonials', 'services', 'doctorCount'));
    }

}
