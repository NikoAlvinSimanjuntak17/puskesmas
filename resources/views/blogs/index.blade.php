@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-8 text-blue-700 text-center">Latest Blogs</h1>

    <div class="blog-slideshow relative w-full max-w-4xl mx-auto overflow-hidden rounded-lg shadow-lg">
        @foreach($blogs as $blog)
            @if($blog->uploads)
           <span class="ibBgImage bgCover position-absolute" style="background-image: url({{asset('uploads/blogs/'.$blog->image) }})"></span>

                </div>
            @endif
        @endforeach

        <!-- Left Arrow -->
        <button id="prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75">
            &#10094;
        </button>

        <!-- Right Arrow -->
        <button id="next" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75">
            &#10095;
        </button>
    </div>
</div>

<script>
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => slide.style.opacity = (i === index ? 1 : 0));
    }

    // Initial display
    showSlide(current);

    // Auto-change every 10 seconds
    let slideInterval = setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 10000);

    // Manual navigation
    prevBtn.addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
        resetInterval();
    });

    nextBtn.addEventListener('click', () => {
        current = (current + 1) % slides.length;
        showSlide(current);
        resetInterval();
    });

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 10000);
    }
</script>

<style>
.blog-slideshow {
    position: relative;
    height: 24rem; /* adjust as needed */
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
</style>
@endsection
