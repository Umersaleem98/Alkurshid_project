<?php

namespace App\Http\Controllers\Home\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('templates.pages.about.about');
    }
}
