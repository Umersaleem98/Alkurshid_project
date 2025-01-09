<?php

namespace App\Http\Controllers\Home\Appointment;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('templates.pages.appointment-doctors');
    }

    public function store(Request $request)
    {
        $appointments = new Appointment;
        $appointments->name = $request->name;
        $appointments->email = $request->email;
        $appointments->phone = $request->phone;
        $appointments->date = $request->date;
        $appointments->department = $request->department;
        $appointments->doctor = $request->doctor;
        $appointments->message = $request->message;
        $appointments->save();  

        return redirect()->back()->with('success', 'Your appointment request has been sent successfully.');
    }
}
