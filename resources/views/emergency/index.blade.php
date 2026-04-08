@extends('layouts.app')

@section('title', __('tran.emergency'))

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-bold text-blue-700 mb-4">🚨 {{ __('tran.emergency') }}</h1>

    <p class="mb-4">
        In case of emergency, please call: 
        <strong>📞 +251 911 234 567</strong>
    </p>

    <p class="mb-6">
        Or submit your emergency request below:
    </p>

    @if(session('success'))
        <div class="p-3 bg-green-100 border border-green-400 text-green-800 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('emergency.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-semibold">{{ __('tran.patient_name') }}</label>
            <input type="text" name="patient_name" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">{{ __('tran.patient_phone') }}</label>
            <input type="text" name="patient_phone" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">{{ __('tran.details') }}</label>
            <textarea name="details" class="w-full border rounded p-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            {{ __('tran.submit_emergency') }}
        </button>
    </form>
</div>
@endsection
