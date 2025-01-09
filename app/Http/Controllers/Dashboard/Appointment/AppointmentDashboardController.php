<?php

namespace App\Http\Controllers\Dashboard\Appointment;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentDashboardController extends Controller
{
    public function index()
    {
        $aappointment = Appointment::all();
        return view('admin.pages.appointment.list', compact('aappointment'));
    }
}
