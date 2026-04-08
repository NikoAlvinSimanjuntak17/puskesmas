<?php

namespace App\Http\Controllers;

use App\Models\{Doctor, Department};
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request){
        $q = Doctor::with('department');
        if($request->filled('department')) $q->where('department_id',$request->department);
        if($request->filled('gender')) $q->where('gender',$request->gender);
        if($request->filled('name')) $q->where('name','like','%'.$request->name.'%');
        $doctors = $q->paginate(12);
        $departments = Department::all();
        return view('doctors.index', compact('doctors','departments'));
    }
    public function show(Doctor $doctor){
        return view('doctors.show', compact('doctor'));
    }
}