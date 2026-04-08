<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    public function index()
    {
        $items = Job::orderByDesc('created_at')->paginate(15);
        return view('admin.jobs.index', compact('items'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.jobs.create', compact('departments'));
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'title'         => 'required',
            'department_id' => 'nullable|exists:departments,id',
            'type'          => 'nullable',
            'location'      => 'nullable',
            'description'   => 'nullable',
            'deadline'      => 'nullable|date',
        ]);

        $data['slug'] = Str::slug($data['title']);

        Job::create($data);

        return redirect()->route('admin.jobs.index');
    }

    public function edit(Job $job)
    {
        $departments = Department::all();
        return view('admin.jobs.edit', compact('job', 'departments'));
    }

    public function update(Request $r, Job $job)
    {
        $data = $r->validate([
            'title'         => 'required',
            'department_id' => 'nullable|exists:departments,id',
            'type'          => 'nullable',
            'location'      => 'nullable',
            'description'   => 'nullable',
            'deadline'      => 'nullable|date',
        ]);

        $data['slug'] = Str::slug($data['title']);

        $job->update($data);

        return back()->with('success', 'Updated');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return back();
    }
}
