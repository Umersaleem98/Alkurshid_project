<?php

namespace App\Http\Controllers\Home\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('templates.pages.contact.contact');
    }
}
