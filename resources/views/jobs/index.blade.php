@extends('layouts.app')

@section('content')
<div class="jobs-container">
    <h1>@lang('tran.careers')</h1>

    @foreach($jobs as $j)
        <div class="job-card">
            @if($j->photo)
                <img src="{{ asset('storage/'.$j->photo) }}" alt="{{ $j->title }}" class="job-photo">
            @endif
            <div class="job-title">{{ $j->title }}</div>
            <div class="job-details">{{ $j->location }} — {{ optional($j->deadline)->format('M d, Y') }}</div>
            
            <div class="mt-4">
                <a href="{{ route('jobs.apply', $j->slug) }}" class="apply-btn">
                    👉 Apply Now
                </a>
            </div>
        </div>
    @endforeach

    <div class="pagination">
        {{ $jobs->links() }}
    </div>
</div>
@endsection

<style>
/* Job photo */
.job-photo {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 0.75rem;
    margin-bottom: 0.75rem;
}

/* Apply Now Button */
.apply-btn {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background-color: #2563eb; /* Tailwind blue-600 */
    color: #fff;
    font-weight: 600;
    border-radius: 9999px;
    text-decoration: none;
    transition: background 0.3s ease, transform 0.3s ease;
}

.apply-btn:hover {
    background-color: #1d4ed8; /* Tailwind blue-700 */
    transform: scale(1.05);
}

/* Container */
.jobs-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 1rem;
}

/* Page title */
.jobs-container h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #111827; /* Tailwind gray-900 */
    text-align: center;
}

/* Job card */
.job-card {
    background: #ffffff;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    padding: 1.25rem 1.5rem;
    margin-bottom: 1rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: block;
    text-decoration: none;
}

.job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.1);
}

/* Job title */
.job-card .job-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1d4ed8; /* Tailwind blue-700 */
    margin-bottom: 0.25rem;
    transition: color 0.3s ease;
}

.job-card:hover .job-title {
    color: #2563eb; /* Tailwind blue-600 */
}

/* Job details */
.job-card .job-details {
    font-size: 0.875rem;
    color: #6b7280; /* Tailwind gray-500 */
}

/* Pagination */
.jobs-container .pagination {
    display: flex;
    justify-content: center;
    margin-top: 2rem;
}

.jobs-container .pagination a,
.jobs-container .pagination span {
    margin: 0 0.25rem;
    padding: 0.5rem 0.75rem;
    border-radius: 0.5rem;
    border: 1px solid #e5e7eb; /* Tailwind gray-200 */
    color: #374151;
    text-decoration: none;
    transition: background 0.3s ease, color 0.3s ease;
}

.jobs-container .pagination a:hover {
    background: #2563eb;
    color: #fff;
    border-color: #2563eb;
}

.jobs-container .pagination .active {
    background: #1d4ed8;
    color: #fff;
    border-color: #1d4ed8;
}
</style>
