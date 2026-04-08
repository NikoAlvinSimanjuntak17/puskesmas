@extends('layouts.app')

@section('title', $department->name . ' Services')

@section('content')
<div class="container">

    {{-- Department Title --}}
    <h2 class="mb-3">{{ $department->name }} — Services</h2>
    <p class="text-muted">{{ $department->description }}</p>

    {{-- Dynamic List of Services --}}
    @if($services->isNotEmpty())
        <div class="service-list mb-5">
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">
                        <strong>{{ $service->name }}:</strong> {{ $service->description }}
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <p class="text-muted">No services available for this department at the moment.</p>
    @endif

    {{-- Dynamic Service Gallery --}}
    @if($services->isNotEmpty())
        <div class="row mt-4 service-gallery">
            @foreach($services as $service)
                @if($service->image)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="{{ asset('uploads/services/' . $service->image) }}" 
                                 class="card-img-top" 
                                 alt="{{ $service->name }}">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif

</div>
@endsection
