<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // Show latest blogs first
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
         $blogs = Blog::latest()->get(); // get all blogs
    $setting = Setting::first();    // if you have settings
    return view('home', compact('blogs', 'setting'));
    }

   
}

