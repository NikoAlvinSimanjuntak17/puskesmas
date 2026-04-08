<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Appointment; // Optional if you want to log emergency requests

class EmergencyController extends Controller
{
    /**
     * Show the emergency page.
     */
    public function index()
    {
        // You can return a view for emergency info or a form
        return view('emergency.index'); 
    }

    /**
     * Optional: Handle emergency submission
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_name' => 'required|string|max:255',
            'patient_phone' => 'required|string',
            'details' => 'nullable|string',
        ]);

        // Optional: Save to appointments table or a separate emergency table
        // Appointment::create([
        //     'patient_name' => $data['patient_name'],
        //     'patient_phone' => $data['patient_phone'],
        //     'notes' => $data['details'],
        //     'status' => 'emergency',
        // ]);

        return redirect()->back()->with('success', 'Emergency request submitted!');
    }
}
