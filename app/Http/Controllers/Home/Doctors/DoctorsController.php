<?php

namespace App\Http\Controllers\Home\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        return view('templates.pages.doctors.doctors');
    }
}
