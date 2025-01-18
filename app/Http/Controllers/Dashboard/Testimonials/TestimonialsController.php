<?php

namespace App\Http\Controllers\Dashboard\Testimonials;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{

    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonials.list', compact('testimonials'));
    }


    public function create()
    {
        return view('admin.pages.testimonials.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
    
        // Create a new Testimonial object
        $testimonial = new Testimonial();
    
        // Set the attributes from the request
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->quote = $request->quote;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName(); // Add timestamp for uniqueness
            $file->move(public_path('uploads/testimonial'), $filename); // Save file in the directory
            $testimonial->image = $filename; // Save the file name in the database
        }
    
        // Save the testimonial record to the database
        $testimonial->save();
    
        // Redirect to a desired route with a success message
        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }



    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.pages.testimonials.edit', compact('testimonial'));
    }
    
    // public function update(Request $request, $id)
    // {
    //     // Validate the incoming request
    
    //     // Find the testimonial record
    //     $testimonial = Testimonial::find($id);
    
    //     // Set the attributes from the request
    //     $testimonial->name = $request->name;
    //     $testimonial->designation = $request->designation;
    //     $testimonial->quote = $request->quote;
    
    //     // Handle image upload
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = time() . '_' . $file->getClientOriginalName(); // Add timestamp for uniqueness
    //         $file->move(public_path('uploads/testimonial'), $filename); // Save file in the directory
    //         $testimonial->image = $filename; // Save the file name in the database
    //     }
    
    //     // Save the testimonial record to the database
    //     $testimonial->save();
    
    //     // Redirect to a desired route with a success message
    //     return redirect()->back()->with('success', 'Testimonial updated successfully!');
    // }


    public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'nullable|string|max:255',
        'quote' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
    ]);

    // Find the testimonial record
    $testimonial = Testimonial::find($id);

    // Set the attributes from the request
    $testimonial->name = $request->name;
    $testimonial->designation = $request->designation;
    $testimonial->quote = $request->quote;

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($testimonial->image) {
            $oldImagePath = public_path('uploads/testimonial/' . $testimonial->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Delete the old image file
            }
        }

        // Upload the new image
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName(); // Add timestamp for uniqueness
        $file->move(public_path('uploads/testimonial'), $filename); // Save file in the directory
        $testimonial->image = $filename; // Save the new file name in the database
    }

    // Save the testimonial record to the database
    $testimonial->save();

    // Redirect to the previous page with a success message
    return redirect()->back()->with('success', 'Testimonial updated successfully!');
}

    public function destroy($id)
    {
        // Find the testimonial record
        $testimonial = Testimonial::find($id);
    
        // Delete the image if it exists
        if ($testimonial->image) {
            $imagePath = public_path('uploads/testimonial/' . $testimonial->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file
            }
        }
    
        // Delete the testimonial record from the database
        $testimonial->delete();
    
        // Redirect to the previous page with a success message
        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }

}
