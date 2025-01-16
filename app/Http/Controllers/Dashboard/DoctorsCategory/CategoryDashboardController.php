<?php

namespace App\Http\Controllers\Dashboard\DoctorsCategory;

use Illuminate\Http\Request;
use App\Models\DoctorCategory;
use App\Http\Controllers\Controller;

class CategoryDashboardController extends Controller
{
    public function index()
    {
        $doctorcategiries = DoctorCategory::all();
        return view('admin.pages.categories.list', compact('doctorcategiries'));
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function store(Request $request)
    {
        $doctorcategiries = new DoctorCategory;
        $doctorcategiries->name = $request->name;
        $doctorcategiries->description = $request->description;
        $doctorcategiries->save();

        return redirect()->back()
            ->with('success', 'Category created successfully.');
    }

    public function delete($id)
    {
        $doctorcategiries = DoctorCategory::find($id);
        $doctorcategiries->delete();

        return redirect()->back()
            ->with('success', 'Category deleted successfully.');
    }
}
