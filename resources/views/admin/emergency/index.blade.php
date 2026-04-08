@extends('layouts.app')

@section('title', 'Emergency')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">🚨 Emergency</h1>
    @if(session('success'))
        <div class="p-3 bg-green-100 border border-green-400 text-green-800 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('emergency.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-semibold">Patient Name</label>
            <input type="text" name="patient_name" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">Phone</label>
            <input type="text" name="patient_phone" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">Details</label>
            <textarea name="details" class="w-full border rounded p-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit Emergency</button>
    </form>
</div>
@endsection
