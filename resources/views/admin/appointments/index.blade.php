@extends('layouts.admin')

@section('title', 'Appointments')

@section('content')
<header class="topbar px-6 py-4 flex justify-between items-center shadow">
      <h1 class="text-xl font-bold">@yield('title', 'Dashboard')</h1>
    
    </header>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Doctor</th>
                <th>Scheduled At</th>
                <th>Status</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @forelse($appointments->sortByDesc('scheduled_at') as $appointment)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $appointment->patient_name }}</td>
                <td>{{ $appointment->patient_email ?? '-' }}</td>
                <td>{{ $appointment->patient_phone }}</td>
                <td>{{ $appointment->department->name ?? '-' }}</td>
                <td>{{ $appointment->doctor->name ?? '-' }}</td>
                <td>{{ $appointment->scheduled_at->format('d M Y, H:i') }}</td>
                <td>
                    <span class="status-badge {{ $appointment->status == 'pending' ? 'status-pending' : 'status-complete' }}">
                        {{ ucfirst($appointment->status) }}
                    </span>
                </td>
                <td>{{ $appointment->notes ?? '-' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center text-gray-500 py-4">No appointments found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
