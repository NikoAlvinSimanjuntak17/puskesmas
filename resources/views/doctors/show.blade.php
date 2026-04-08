@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold mb-2">{{ $doctor->name }}</h1>
<div class="text-gray-600 mb-2">{{ $doctor->department->name }} — {{ $doctor->specialty }}</div>
<p>{{ $doctor->bio }}</p>
@endsection