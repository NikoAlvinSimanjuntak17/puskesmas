<!-- resources/views/admin/doctors/edit.blade.php -->
@extends('layouts.admin')

@section('title', 'Edit Doctor')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Doctor</h1>

<form action="{{ route('admin.doctors.update', $doctor) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $doctor->name }}" class="w-full border p-2">
    <select name="department_id" class="w-full border p-2">
        @foreach($departments as $dept)
            <option value="{{ $dept->id }}" {{ $doctor->department_id == $dept->id ? 'selected' : '' }}>
                {{ $dept->name }}
            </option>
        @endforeach
    </select>
    <input type="text" name="specialty" value="{{ $doctor->specialty }}" class="w-full border p-2">
    <select name="gender" class="w-full border p-2">
        <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
    </select>
    <input type="file" name="photo" class="w-full border p-2">
    @if($doctor->photo)
        <img src="{{ asset('storage/'.$doctor->photo) }}" width="100" class="rounded">
    @endif
    <input type="text" name="available_days" value="{{ $doctor->available_days }}" class="w-full border p-2">
    <textarea name="bio" class="w-full border p-2">{{ $doctor->bio }}</textarea>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
