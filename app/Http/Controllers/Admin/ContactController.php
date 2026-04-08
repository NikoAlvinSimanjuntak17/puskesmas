<?php

namespace App\Http\Controllers;

use App\Models\{Department, Feedback};
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('contact.index', compact('departments'));
    }
    public function send(Request $request){
        $data = $request->validate([
            'name'=>'required|max:255',
            'email'=>'nullable|email',
            'department_id'=>'nullable|exists:departments,id',
            'subject'=>'required|max:255',
            'message'=>'required|string'
        ]);
        $data['status'] = 'new';
        Feedback::create($data);
        return back()->with('success','Message sent');
    }
}