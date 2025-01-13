<?php

namespace App\Http\Controllers\Dashboard\Services;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesDashboardController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.pages.services.list', compact('services'));
    }

    public function create()
    {
        return view('admin.pages.services.create');
    }

    public function store(Request $request)
    {
       
    
        // Create a new service record
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->link = $request->link;
    
        // Handle file upload for icon
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('uploads/services/icons'), $iconName);
            $service->icon = $iconName;
        }
    
        // Handle file upload for images
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/services/images'), $imageName);
            $service->images = $imageName;
        }
    
        // Save the service to the database
        $service->save();
    
        // Redirect to a route or return response
        return redirect()->back()->with('success', 'Service added successfully.');
    }

    public function detete($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
    
}
