<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {

           $departments = Department::all();


    return view('admin.doctors.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialty' => 'required',
            'gender' => 'required',
            'photo' => 'nullable|image',
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->slug = \Str::slug($request->name);
        $doctor->department_id = $request->department_id;
        $doctor->specialty = $request->specialty;
        $doctor->gender = $request->gender;
        $doctor->available_days = $request->available_days;
        $doctor->bio = $request->bio;

        if ($request->hasFile('photo')) {
            $fileName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads/doctors'), $fileName);
            $doctor->photo = $fileName;
        }

        $doctor->save();

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor added successfully.');
    }

    // add edit, update, destroy later
}
