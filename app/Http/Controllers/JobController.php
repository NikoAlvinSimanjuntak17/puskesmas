<?php

namespace App\Http\Controllers;

use App\Models\{Job, Department};
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::orderByDesc('created_at')->paginate(10);
        return view('jobs.index', compact('jobs'));
    }
    public function show(Job $job){
        return view('jobs.show', compact('job'));
    }
    public function apply(Job $job){
        return view('jobs.apply', compact('job'));
    }
    public function submit(Job $job, Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'cv'=>'required|file|mimes:pdf,doc,docx|max:2048'
        ]);
        $path = $request->file('cv')->store('cvs','public');
        return redirect()->route('jobs.index')->with('success','Application submitted');
    }
}