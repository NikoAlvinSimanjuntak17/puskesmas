@extends('layouts.app')
@section('content')
<div class="apply-container">
    <h1 class="apply-title">@lang('tran.apply_for') {{ $job->title }}</h1>

    <form action="{{ route('jobs.submit',$job->slug) }}" method="post" enctype="multipart/form-data" class="apply-form">
        @csrf
        <input class="form-input" name="name" placeholder="@lang('tran.name')" required/>
        <input class="form-input" name="email" placeholder="Email" required/>
        <input type="file" name="cv" class="form-input" required/>
        <button class="submit-btn">@lang('tran.submit')</button>
    </form>
</div>

<style>
/* Container */
.apply-container {
    max-width: 600px;
    margin: 2rem auto;
    padding: 1.5rem;
    background: #f9fafb; /* light gray background */
    border-radius: 1rem;
    box-shadow: 0 8px 24px rgba(0,0,0,0.05);
}

/* Title */
.apply-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-align: center;
    color: #111827; /* Tailwind gray-900 */
}

/* Form layout */
.apply-form {
    display: grid;
    gap: 1rem;
}

/* Inputs */
.form-input {
    padding: 0.75rem 1rem;
    border: 1px solid #d1d5db; /* Tailwind gray-300 */
    border-radius: 0.75rem;
    font-size: 1rem;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}

.form-input:focus {
    outline: none;
    border-color: #2563eb; /* Tailwind blue-600 */
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
    background: #fff;
}

/* Button */
.submit-btn {
    padding: 0.75rem 1.5rem;
    background-color: #2563eb; /* Tailwind blue-600 */
    color: #fff;
    font-weight: 600;
    border-radius: 9999px; /* pill button */
    border: none;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

.submit-btn:hover {
    background-color: #1d4ed8; /* Tailwind blue-700 */
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 480px) {
    .apply-container {
        padding: 1rem;
    }
}
</style>
@endsection
