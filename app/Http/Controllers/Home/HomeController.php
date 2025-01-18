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
        $testimonials = Testimonial::all();
        $doctors = Doctor::all();
        return view('index', compact('doctors', 'testimonials', 'services'));
    }
}
