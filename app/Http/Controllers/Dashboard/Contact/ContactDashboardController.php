<?php

namespace App\Http\Controllers\Dashboard\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactDashboardController extends Controller
{
    public function index()
    {
        // $contacts = Contact::all();
        $contacts = Contact::paginate(10);
        return view('admin.pages.contacts.list', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Contact Deleted Successfully');
    }
}
