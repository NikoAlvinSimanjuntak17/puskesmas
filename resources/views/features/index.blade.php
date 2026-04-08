@extends('layouts.app')

@section('title', 'Features')

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8">🌟 Our Features</h1>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($features as $feature)
                <div class="bg-white shadow-md rounded-xl p-6 text-center hover:shadow-lg transition">
                    <div class="text-5xl text-blue-600 mb-4">
                        <i class="{{ $feature->icon }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $feature->title }}</h3>
                    <p class="text-gray-600">{{ $feature->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
