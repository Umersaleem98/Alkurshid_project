<?php

namespace App\Http\Controllers\Home\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function Pathology()
    {
        return view('templates.pages.departments.pathology');
    }

    public function Cardiology()
    {
        return view('templates.pages.departments.cardiology');
    }

    public function Radiology()
    {
        return view('templates.pages.departments.radiology');
    }
}
