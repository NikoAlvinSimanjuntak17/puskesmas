@extends('layouts.app')
@section('title', $healthInfo->title)

@section('content')
<div class="container py-5">
    <h2 class="mb-3">{{ $healthInfo->title }}</h2>
    @if($healthInfo->image)
    <img src="{{ asset('uploads/health/' . $healthInfo->image) }}" class="img-fluid mb-3" alt="{{ $healthInfo->title }}">
    @endif
    <p>{!! nl2br(e($healthInfo->long_description)) !!}</p>
    @if($healthInfo->file)
    <a href="{{ route('health.download', $healthInfo->id) }}" class="btn btn-success mt-3">Download File</a>
    @endif
</div>
@endsection
