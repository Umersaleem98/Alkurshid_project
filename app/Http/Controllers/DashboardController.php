<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $doctorCount = Doctor::count();

        // Pass the count to the view
        return view('dashboard', compact('doctorCount'));
    }
  
}
