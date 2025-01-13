<?php

namespace App\Http\Controllers\Home;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('index', compact('doctors'));
    }
}
