<?php

namespace App\Http\Controllers;

use App\Models\{Department, Service};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::paginate(12);
        return view('departments.index', compact('departments'));
    }
  



public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // max 2MB
    ]);

    $department = new Department();
    $department->name = $request->name;
    $department->description = $request->description;

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/departments'), $filename);
        $department->photo = $filename;
    }

    $department->save();

    return redirect()->back()->with('success', 'Department added successfully!');
}

}