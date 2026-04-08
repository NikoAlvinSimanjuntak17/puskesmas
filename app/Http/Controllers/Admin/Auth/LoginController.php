<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function login(Request $request)
{
    // Validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Hardcoded login check
    if ($request->email === "selam@gmail.com" && $request->password === "12@@") {
        // Store a session variable to mark user as logged in
        $request->session()->put('is_admin', true);
        return redirect()->route('dashboard');
    }

    // If login fails
    return back()->withErrors([
        'email' => 'Invalid email or password.',
    ]);
}

}
