<?php

namespace App\Http\Controllers\Home\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('templates.pages.careers.career');
    }
}
