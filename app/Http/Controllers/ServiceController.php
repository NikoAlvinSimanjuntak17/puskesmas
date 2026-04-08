<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Department;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Show the main services page with all categories
     */
    public function index()
    {
        $departments = Department::all();
        $services = Service::all();
       

        return view('services.index', compact(
            'departments',
            'services',
       
        ));
    }

    /**
     * Show services of a specific department
     */
    public function show(Department $department)
    {
        // Fetch services for this department
        $services = Service::where('department_id', $department->id)
                           ->paginate(6); // pagination if needed

        return view('services.show', compact('department', 'services'));
    }
}
