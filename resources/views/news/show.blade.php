@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold mb-2">{{ $news->title }}</h1>
<div class="text-sm text-gray-600 mb-4">{{ optional($news->published_at)->format('M d, Y') }}</div>
<div class="prose max-w-none">{!! nl2br(e($news->body)) !!}</div>
@endsection