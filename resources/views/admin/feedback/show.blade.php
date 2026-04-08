@extends('layouts.admin')

@section('title', 'Feedback Details')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">📨 Feedback Details</h1>

    <div class="bg-white shadow rounded p-6">
        <p><strong>Patient:</strong> {{ $feedback->patient_name }}</p>
        <p><strong>Email:</strong> {{ $feedback->patient_email }}</p>
        <p><strong>Subject:</strong> {{ $feedback->subject }}</p>
        <p><strong>Message:</strong> {{ $feedback->message }}</p>
        <p class="text-gray-500 mt-4">Sent at: {{ $feedback->created_at->format('d M Y, H:i') }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.feedback.index') }}" class="text-blue-600 hover:underline">⬅ Back</a>
    </div>
</div>
@endsection
