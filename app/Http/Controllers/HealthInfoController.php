<?php

namespace App\Http\Controllers;

use App\Models\HealthInfo;
use Illuminate\Http\Request;

class HealthInfoController extends Controller
{
    // Display list of health info
    public function index()
    {
        $healthInfos = HealthInfo::orderBy('created_at', 'desc')->get();
        return view('health.index', compact('healthInfos'));
    }

    // Show a single health info
    public function show(HealthInfo $healthInfo)
    {
        return view('health.show', compact('healthInfo'));
    }

    // Optional: download file
    public function downloadFile(HealthInfo $healthInfo)
    {
        if ($healthInfo->file && file_exists(public_path('uploads/health/' . $healthInfo->file))) {
            return response()->download(public_path('uploads/health/' . $healthInfo->file));
        }

        return redirect()->back()->with('error', 'File not found.');
    }
}
