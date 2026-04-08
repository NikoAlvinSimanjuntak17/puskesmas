<?php

namespace App\Http\Controllers;

use App\Models\{
    Department,
    Doctor,
    Service,
    News,
    Job,
    Setting,
    Blog,
    Feature,
    AboutUs,
    Faq,
    Contact,
    Testimonial
};
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    // Site settings
    $setting = Setting::first();
    $features = Feature::all();
    $about_us = AboutUs::all();
   $content = AboutUs::all();
   $faqs = Faq::all();

    // Sections
    $departments = Department::limit(8)->get();
    $doctors = Doctor::with('department')->limit(6)->get();
    $services = Service::limit(6)->get();
    $news = News::orderByDesc('published_at')->limit(5)->get();
    $jobs = Job::orderByDesc('created_at')->limit(3)->get();
    $blogs = Blog::all();
     $testimonials = Testimonial::latest()->get();

    // Stats from tables
    $stats = [
        (object)[
            'icon' => 'bi bi-building',
            'number' => Department::count(),
            'title' => 'Departments',
        ],
        (object)[
            'icon' => 'bi bi-people',
            'number' => Doctor::count(),
            'title' => 'Doctors',
        ],
        (object)[
            'icon' => 'bi bi-briefcase',
            'number' => Service::count(),
            'title' => 'Services',
        ],
    ];

    // Pass all data to the home view
    return view('home', compact(
        'setting', 'features', 'about_us',
        'departments', 'doctors', 'services',
        'news', 'jobs', 'blogs', 'stats','faqs','testimonials'
    ));
}

}




 