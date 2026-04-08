<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;  
use App\Models\{Appointment, Doctor, Department, News, Job, Feedback};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard', [
            'appointments' => Appointment::count(),
            'doctors' => Doctor::count(),
            'departments' => Department::count(),
            'news' => News::count(),
            'jobs' => Job::count(),
            'feedbacks' => Feedback::count(),
        ]);
    }
}