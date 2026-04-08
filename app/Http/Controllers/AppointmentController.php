<?php

namespace App\Http\Controllers;

use App\Models\{Appointment, Department, Doctor};
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AppointmentController extends Controller
{
    public function create(){
        $departments = Department::with('doctors')->get();
        return view('appointments.create', compact('departments'));
    }
    public function store(Request $request){
         $data = $request->validate([
            'department_id'=>'required|exists:departments,id',
            'doctor_id'=>'required|exists:doctors,id',
            'patient_name'=>'required|string|max:255',
            'patient_email'=>'nullable|email',
            'patient_phone'=>'required|string',
            'scheduled_at'=>'required|date|after:now',
            'notes'=>'nullable|string',
        ]);
        $data['status'] = 'pending';
        Appointment::create($data);
        return redirect()->route('appointments.thankyou');
    }
    public function thankyou(){
        return view('appointments.thankyou');
    }
}