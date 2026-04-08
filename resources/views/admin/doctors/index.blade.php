@extends('layouts.admin')

@section('title', 'Doctors')

@section('content')
<header class="topbar px-6 py-4 flex justify-between items-center shadow">
      <h1 class="text-xl font-bold">@yield('title', 'Dashboard')</h1>
    
    </header>
 

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 mb-4 rounded shadow">{{ session('success') }}</div>
@endif
 

<div class="table-container">
      <section>
   <a href="{{ route('admin.doctors.create') }}" class="add-doctor-btn">+ Add Doctor</a>

</section>
    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden shadow-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">#</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Photo</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Name</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Department</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Specialty</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Gender</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Available Days</th>
                <th class="p-3 text-left text-gray-700 uppercase text-sm">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($doctors as $doctor)
            <tr class="border-t hover:bg-gray-50 transition">
                <td class="p-3">{{ $loop->iteration }}</td>
                <td class="p-3">
                    @if($doctor->photo)
                        <img src="{{ asset('storage/'.$doctor->photo) }}" width="50" height="50" class="rounded-full object-cover">
                    @else
                        <span class="text-gray-400">-</span>
                    @endif
                </td>
                <td class="p-3 font-medium text-gray-800">{{ $doctor->name }}</td>
                <td class="p-3 text-gray-600">{{ $doctor->department->name ?? '-' }}</td>
                <td class="p-3 text-gray-600">{{ $doctor->specialty }}</td>
                <td class="p-3 capitalize text-gray-600">{{ $doctor->gender }}</td>
                <td class="p-3 text-gray-600">{{ $doctor->available_days }}</td>
                <td class="p-3 space-x-2">
                      <a href="{{ route('admin.doctors.edit', $doctor) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('admin.doctors.destroy', $doctor) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?')">
                        @csrf @method('DELETE')
                      
<button type="submit" class="btn-delete">Delete</button>

                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center text-gray-500 py-6">No doctors found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
.table-container {
    overflow-x: auto;
    margin-top: 20%;
   
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    min-width: 800px; /* increase table width */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Table header */
table thead th {
    background-color: #f3f4f6; /* light gray */
    color: #374151; /* dark gray text */
    text-transform: uppercase;
    font-size: 0.875rem;
    font-weight: 600;
    padding: 0.75rem;
    border: 1px solid #d1d5db;
}

/* Table body cells */
table tbody td {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    color: #4b5563; /* medium gray text */
}

/* Table row hover effect */
table tbody tr:hover {
    background-color: #f9fafb;
}

/* Rounded images in table */
table tbody td img {
    border-radius: 50%;
    object-fit: cover;
}


  
  
/* Add Doctor button */
.add-doctor-btn {
    
    margin-bottom: 0%;
    background-color: #3b82f6; /* blue */
    color: white;
    padding: 0.5rem 2rem;
    border-radius: 0.5rem;
    font-weight: 700;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    transition: all 0.2s ease-in-out;
    text-decoration: none;
}
.add-doctor-btn:hover {
    background-color: #2563eb; /* darker blue */
    transform: scale(1.05);
}

/* Edit/Delete buttons */
.btn-action {
    padding: 0.3rem 0.8rem;
    border-radius: 0.375rem;
    font-weight: 500;
    color: white;
    text-decoration: none;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    transition: all 0.2s ease-in-out;
}
.btn-edit {
    background-color: #3b82f6;
}
.btn-edit:hover {
    background-color: #2563eb;
    transform: scale(1.05);
}
.btn-delete {
    background-color: #ef4444;
}
.btn-delete:hover {
    background-color: #dc2626;
    transform: scale(1.05);
}

/* Department and gender badges */
.badge {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    font-size: 0.75rem;
    border-radius: 9999px;
    font-weight: 500;
    color: white;
}
.badge-department {
    background-color: #60a5fa; /* light blue */
}
.badge-male {
    background-color: #22c55e; /* green */
}
.badge-female {
    background-color: #ec4899; /* pink */
}
</style>
@endsection
