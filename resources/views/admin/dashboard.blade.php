@extends('layouts.admin')
 
@section('content')
<header class="topbar px-6 py-4 flex justify-between items-center shadow">
      <h1 class="text-xl font-bold">@yield('title', 'Dashboard')</h1>
    
    </header>
<div class="dashboard-container">

    <div class="cards-wrapper">
        <div class="card">
            <div>Appointments</div>
            <span>{{ $appointments }}</span>
        </div>
        <div class="card">
            <div>Doctors</div>
            <span>{{ $doctors }}</span>
        </div>
        <div class="card">
            <div>Departments</div>
            <span>{{ $departments }}</span>
        </div>
        <div class="card">
            <div>News</div>
            <span>{{ $news }}</span>
        </div>
        <div class="card">
            <div>Jobs</div>
            <span>{{ $jobs }}</span>
        </div>
        <div class="card">
            <div>Feedback</div>
            <span>{{ $feedbacks }}</span>
        </div>
    </div>
</div>

@endsection
