<!-- resources/views/admin/doctors/create.blade.php -->
@extends('layouts.admin')

@section('title', 'Add Doctor')

@section('content')
<h1 class="text-xl font-bold mb-4">Add New Doctor</h1>

<form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input type="text" name="name" placeholder="Doctor Name" class="w-full border p-2">
    <select name="department_id" class="w-full border p-2">
        <option value="">Select Department</option>
        @foreach($departments as $dept)
            <option value="{{ $dept->id }}">{{ $dept->name }}</option>
        @endforeach
    </select>
    <input type="text" name="specialty" placeholder="Specialty" class="w-full border p-2">
    <select name="gender" class="w-full border p-2">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="file" name="photo" class="w-full border p-2">
    <input type="text" name="available_days" placeholder="Available Days (e.g. Mon-Fri)" class="w-full border p-2">
    <textarea name="bio" placeholder="Short bio" class="w-full border p-2"></textarea>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection
