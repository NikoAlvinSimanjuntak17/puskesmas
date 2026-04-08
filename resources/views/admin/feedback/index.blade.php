@extends('layouts.admin')

@section('title', 'Patient Feedback')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">📩 Patient Feedback</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-300 bg-white rounded shadow">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Patient</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Subject</th>
                <th class="border px-4 py-2">Message</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $f)
            <tr>
                <td class="border px-4 py-2">{{ $f->id }}</td>
                <td class="border px-4 py-2">{{ $f->patient_name }}</td>
                <td class="border px-4 py-2">{{ $f->patient_email }}</td>
                <td class="border px-4 py-2">{{ $f->subject }}</td>
                <td class="border px-4 py-2">{{ Str::limit($f->message, 50) }}</td>
                <td class="border px-4 py-2">{{ $f->created_at->format('d M Y') }}</td>
                <td class="border px-4 py-2 text-center">
                    <a href="{{ route('admin.feedback.show', $f->id) }}" class="text-blue-600 hover:underline">View</a> |
                    <form method="POST" action="{{ route('admin.feedback.destroy', $f->id) }}" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Delete feedback?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $feedbacks->links() }}
    </div>
</div>
@endsection
<style>/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

/* Heading */
.container h1 {
    font-size: 28px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 20px;
}

/* Success Message */
.bg-green-100 {
    background-color: #eafaf1;
    color: #2ecc71;
    border-left: 5px solid #2ecc71;
    padding: 12px;
    border-radius: 6px;
    margin-bottom: 15px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
}

/* Table Head */
thead tr {
    background: #3498db;
    color: #fff;
    text-align: left;
    font-weight: bold;
}

th, td {
    padding: 14px 16px;
    border-bottom: 1px solid #ddd;
}

/* Table Rows */
tbody tr:hover {
    background: #f4f9ff;
    transition: 0.3s ease-in-out;
}

/* Actions */
a.text-blue-600 {
    color: #2980b9;
    font-weight: 500;
    text-decoration: none;
    margin-right: 6px;
}

a.text-blue-600:hover {
    text-decoration: underline;
}

button.text-red-600 {
    background: none;
    border: none;
    color: #e74c3c;
    font-weight: 500;
    cursor: pointer;
}

button.text-red-600:hover {
    text-decoration: underline;
}

/* Pagination */
.mt-4 nav {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.mt-4 nav ul {
    display: flex;
    list-style: none;
    gap: 8px;
}

.mt-4 nav li a, 
.mt-4 nav li span {
    padding: 8px 14px;
    border-radius: 6px;
    background: #f8f9fa;
    color: #333;
    font-size: 14px;
    border: 1px solid #ddd;
    text-decoration: none;
    transition: 0.3s;
}

.mt-4 nav li a:hover {
    background: #3498db;
    color: #fff;
}

.mt-4 nav li span[aria-current="page"] {
    background: #3498db;
    color: #fff;
    border-color: #3498db;
}
</style>
