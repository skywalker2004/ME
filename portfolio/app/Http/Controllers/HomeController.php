<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'projects' => Project::all(),
            'services' => Service::all(),
            'testimonials' => Testimonial::all(),
        ]);
    }
}
