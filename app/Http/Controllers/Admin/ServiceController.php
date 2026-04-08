<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Service, Department};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index(){ $items = Service::with('department')->paginate(15); return view('admin.services.index',compact('items')); }
    public function create(){ $departments=Department::all(); return view('admin.services.create',compact('departments')); }
    public function store(Request $r){
        $data = $r->validate(['department_id'=>'required|exists:departments,id','name'=>'required','summary'=>'nullable','details'=>'nullable']);
        $data['slug']=Str::slug($data['name']);
        Service::create($data); return redirect()->route('admin.services.index');
    }
    public function edit(Service $service){ $departments=Department::all(); return view('admin.services.edit',compact('service','departments')); }
    public function update(Request $r, Service $service){
        $data = $r->validate(['department_id'=>'required|exists:departments,id','name'=>'required','summary'=>'nullable','details'=>'nullable']);
        $data['slug']=Str::slug($data['name']); $service->update($data); return back()->with('success','Updated');
    }
    public function destroy(Service $service){ $service->delete(); return back(); }
}