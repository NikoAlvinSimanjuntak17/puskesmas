<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // <-- fix
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        // Fetch all appointments for admin side
        $appointments = Appointment::with(['department', 'doctor'])->latest()->paginate(10);

        return view('admin.appointments.index', compact('appointments'));
    }
}
