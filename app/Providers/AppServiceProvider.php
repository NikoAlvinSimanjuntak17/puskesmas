<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\Service;
use App\Models\News;
use App\Models\Job;
use App\Models\Blog;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Share settings with all views
        View::composer('*', function ($view) {
            $view->with('settings', Setting::first());

            // Share other variables globally
            $view->with('doctors', Doctor::with('department')->limit(6)->get());
            $view->with('departments', Department::limit(8)->get());
            $view->with('services', Service::limit(6)->get());
            $view->with('news', News::orderByDesc('published_at')->limit(5)->get());
            $view->with('jobs', Job::orderByDesc('created_at')->limit(3)->get());
            $view->with('blogs', Blog::all());
        });
    }
}
