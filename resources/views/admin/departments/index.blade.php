@extends('layouts.admin')
@section('content')
<h1 class="text-xl font-bold mb-4">Departments</h1>
<a class="px-3 py-2 bg-green-600 text-white rounded" href="{{ route('admin.departments.create') }}">New</a>
<table class="w-full mt-4 bg-white rounded shadow">
<tr><th class="p-2">Name</th><th class="p-2">Phone</th><th class="p-2">Actions</th></tr>
@foreach($departments as $it)
<tr class="border-t">
  <td class="p-2">{{ $it->name }}</td>
  <td class="p-2">{{ $it->phone }}</td>
  <td class="p-2 space-x-2">
    <a class="underline" href="{{ route('admin.departments.edit',$it) }}">Edit</a>
    <form method="post" action="{{ route('admin.departments.destroy',$it) }}" class="inline">@csrf @method('delete')<button class="underline text-red-600">Delete</button></form>
  </td>
</tr>
@endforeach
</table>
{{ $departments->links() }}
@endsection
<style>/* Container for the table */
/* Container for the whole admin page */
.admin-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem 1rem;
}

/* Page title */
.admin-container h1 {
    font-size: 2rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 1.5rem;
    text-align: center;
}

/* Form container */
.admin-form {
    background-color: #ffffff;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    margin-bottom: 2rem;
}

/* Form labels */
.admin-form label {
    display: block;
    margin-bottom: 0.25rem;
    font-weight: 600;
    color: #374151;
}

/* Form inputs and textarea */
.admin-form input[type="text"],
.admin-form input[type="email"],
.admin-form input[type="file"],
.admin-form textarea {
    width: 100%;
    padding: 0.5rem 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

/* Form submit button */
.admin-form button[type="submit"] {
    background-color: #3b82f6; /* blue */
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    border: none;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
}

.admin-form button[type="submit"]:hover {
    background-color: #2563eb;
    transform: scale(1.05);
}

/* Table container for horizontal scroll */
.table-container {
    overflow-x: auto;
    margin-bottom: 2rem;
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    min-width: 900px; /* ensures scroll if screen is small */
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

/* Table headers */
table thead th {
    background-color: #f3f4f6;
    color: #374151;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.875rem;
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    text-align: left;
}

/* Table body cells */
table tbody td {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    color: #4b5563;
}

/* Row hover effect */
table tbody tr:hover {
    background-color: #f1f5f9;
}

/* Rounded images in table */
table tbody td img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

/* Action buttons (Edit/Delete) */
.btn-action {
    padding: 0.3rem 0.8rem;
    border-radius: 0.375rem;
    font-weight: 500;
    text-decoration: none;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    transition: all 0.2s ease-in-out;
    display: inline-block;
    margin-right: 0.25rem;
    margin-bottom: 0.25rem;
    color: #fff;
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

/* Responsive adjustments */
@media (max-width: 768px) {
    .admin-form input, .admin-form textarea {
        font-size: 0.9rem;
    }

    table thead th, table tbody td {
        font-size: 0.8rem;
        padding: 0.5rem;
    }
}

</style>