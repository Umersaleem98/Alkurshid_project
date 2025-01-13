<?php

namespace App\Http\Controllers\Home\Services;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('templates.pages.Services.services', compact('services'));
    }
}
