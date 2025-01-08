<?php

namespace App\Http\Controllers\Home\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('templates.pages.appointment-doctors');
    }
}
