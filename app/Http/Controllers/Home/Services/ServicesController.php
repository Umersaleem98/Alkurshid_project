<?php

namespace App\Http\Controllers\Home\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('templates.pages.Services.services');
    }
}
