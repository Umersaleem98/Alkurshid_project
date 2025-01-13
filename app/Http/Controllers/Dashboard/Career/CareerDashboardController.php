<?php

namespace App\Http\Controllers\Dashboard\Career;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerDashboardController extends Controller
{
    public function index()
    {
        $careers = Career::all(); // Fetch all careers
        return view('admin.pages.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.pages.careers.create');
    }

    public function store(Request $request)
    {
         $careers = new Career;
         
         $careers->position_name = $request->position_name;
            $careers->description = $request->description;
            $careers->requirements = $request->requirements;
            $careers->standard_level = $request->standard_level;
            $careers->application_deadline = $request->application_deadline;
            $careers->department = $request->department;
            $careers->job_type = $request->job_type;
            $careers->salary_range = $request->salary_range;
            $careers->status = $request->status;
            $careers->save();

            return redirect()->back()->with('success', 'Career created successfully');
    }

    public function edit($id)
    {
        $careers = Career::find($id);
        return view('admin.pages.careers.edit', compact('careers'));
    }

    public function update(Request $request, $id)
    {
        $careers = Career::find($id);
        $careers->position_name = $request->position_name;
        $careers->description = $request->description;
        $careers->requirements = $request->requirements;
        $careers->standard_level = $request->standard_level;
        $careers->application_deadline = $request->application_deadline;
        $careers->department = $request->department;
        $careers->job_type = $request->job_type;
        $careers->salary_range = $request->salary_range;
        $careers->status = $request->status;
        $careers->save();

        return redirect()->back()->with('success', 'Career updated successfully');
    }

    public function detete($id)
    {
        $careers = Career::find($id);
        $careers->delete();

        return redirect()->back()->with('success', 'Career deleted successfully');
    }
}
