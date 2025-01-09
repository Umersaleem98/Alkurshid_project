<?php

namespace App\Http\Controllers\Dashboard\Doctors;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\DoctorCategory;
use App\Http\Controllers\Controller;

class DoctorsDashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.pages.doctors.list', compact('doctors'));
    }
    
    public function create()
    {
        $doctorCategories = DoctorCategory::all();
        return view('admin.pages.doctors.create', compact('doctorCategories'));
    }
   
    public function store(Request $request)
    {
       
        // Create a new Doctor object
        $doctor = new Doctor();
        
        // Set the attributes from the request
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->specialization = $request->specialization;
        $doctor->category_id = $request->category_id;
        $doctor->facebook = $request->facebook;
        $doctor->instagram = $request->instagram;
        $doctor->twitter = $request->twitter;
        $doctor->linkedin = $request->linkedin;
        $doctor->youtube = $request->youtube;

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '_' . $file->getClientOriginalName(); // Add timestamp for uniqueness
            $file->move(public_path('uploads/profile_pictures'), $filename); // Save file in the directory
            $doctor->profile_picture = $filename; // Save the file name in the database
        }
        // Save the doctor record to the database
        $doctor->save();

        // Redirect to a desired route (e.g., list of doctors) with a success message
        return redirect()->back()->with('success', 'Doctor added successfully!');
    }

}
