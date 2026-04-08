@extends('layouts.app')
@section('title','Services')

@section('content')
<!-- Departments Section -->
<section id="departments" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Section Title -->
    <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
        Our <span class="text-blue-600">Departments</span>
      </h2>
      <div class="mt-4 w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
      <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
        World-class healthcare delivered through specialized departments led by expert professionals.
      </p>
    </div>

    <!-- Departments Grid -->
    <div class="grid md:grid-cols-3 gap-10">
      
      <!-- Cardiology -->
      <div class="bg-white shadow-xl rounded-2xl p-10 flex flex-col items-center text-center 
                  transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-blue-50 hover:to-white"
           data-aos="zoom-in" data-aos-delay="200">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-6 shadow-inner">
          <i class="fa-solid fa-heart-pulse text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800">Cardiology</h3>
        <p class="mt-3 text-gray-600">Advanced heart care with cutting-edge technology and expert cardiologists.</p>
      </div>

      <!-- Neurology -->
      <div class="bg-white shadow-xl rounded-2xl p-10 flex flex-col items-center text-center 
                  transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-purple-50 hover:to-white"
           data-aos="zoom-in" data-aos-delay="400">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-purple-100 text-purple-600 mb-6 shadow-inner">
          <i class="fa-solid fa-brain text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800">Neurology</h3>
        <p class="mt-3 text-gray-600">Comprehensive care for brain, spine, and neurological conditions.</p>
      </div>

      <!-- Orthopedics -->
      <div class="bg-white shadow-xl rounded-2xl p-10 flex flex-col items-center text-center 
                  transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-green-50 hover:to-white"
           data-aos="zoom-in" data-aos-delay="600">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-green-600 mb-6 shadow-inner">
          <i class="fa-solid fa-bone text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800">Orthopedics</h3>
        <p class="mt-3 text-gray-600">Expert treatment for bones, joints, and musculoskeletal health.</p>
      </div>

      <!-- Pediatrics -->
      <div class="bg-white shadow-xl rounded-2xl p-10 flex flex-col items-center text-center 
                  transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-pink-50 hover:to-white"
           data-aos="zoom-in" data-aos-delay="800">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-pink-100 text-pink-600 mb-6 shadow-inner">
          <i class="fa-solid fa-baby text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800">Pediatrics</h3>
        <p class="mt-3 text-gray-600">Comprehensive child healthcare ensuring growth and wellness.</p>
      </div>

      <!-- Dermatology -->
      <div class="bg-white shadow-xl rounded-2xl p-10 flex flex-col items-center text-center 
                  transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-yellow-50 hover:to-white"
           data-aos="zoom-in" data-aos-delay="1000">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-600 mb-6 shadow-inner">
          <i class="fa-solid fa-hand-sparkles text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800">Dermatology</h3>
        <p class="mt-3 text-gray-600">Skin care and advanced treatments with modern dermatology solutions.</p>
      </div>

      <!-- Radiology -->
      <div class="bg-white shadow-xl rounded-2xl p-10 flex flex-col items-center text-center 
                  transform transition duration-500 hover:-translate-y-2 hover:shadow-2xl hover:bg-gradient-to-br hover:from-red-50 hover:to-white"
           data-aos="zoom-in" data-aos-delay="1200">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-red-100 text-red-600 mb-6 shadow-inner">
          <i class="fa-solid fa-x-ray text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800">Radiology</h3>
        <p class="mt-3 text-gray-600">Cutting-edge diagnostic imaging and radiology services.</p>
      </div>

    </div>
  </div>
</section>
<!-- Services Section -->
<section id="services" class="py-24 bg-gradient-to-r from-gray-50 to-gray-100 relative">
  <div class="container mx-auto px-6 lg:px-12 text-center">

    <!-- Title -->
    <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-800 mb-6 tracking-tight">Our Services</h2>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-14 leading-relaxed">
      Combining cutting-edge technology and compassionate care to deliver world-class healthcare services.
    </p>

    <!-- Swiper Carousel -->
    <div class="relative">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <!-- Radiology -->
          <div class="swiper-slide relative rounded-3xl overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/radio.jpg') }}" alt="Radiology"
                 class="w-full h-[450px] object-cover transform group-hover:scale-110 transition duration-700 ease-out">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-8 left-8 text-left text-white transition-all duration-500 group-hover:translate-y-[-8px]">
              <h3 class="text-3xl font-bold drop-shadow-lg">Radiology & Imaging</h3>
              <p class="text-md mt-2 max-w-sm opacity-90">MRI, CT, Ultrasound, and X-ray with advanced diagnostic accuracy.</p>
            </div>
          </div>

          <!-- Ambulance -->
          <div class="swiper-slide relative rounded-3xl overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/ambu.jpg') }}" alt="Ambulance"
                 class="w-full h-[450px] object-cover transform group-hover:scale-110 transition duration-700 ease-out">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-8 left-8 text-left text-white transition-all duration-500 group-hover:translate-y-[-8px]">
              <h3 class="text-3xl font-bold drop-shadow-lg">Ambulance</h3>
              <p class="text-md mt-2 max-w-sm opacity-90">24/7 emergency response equipped with life-saving facilities.</p>
            </div>
          </div>

          <!-- Pharmacy -->
          <div class="swiper-slide relative rounded-3xl overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/pharma.jpg') }}" alt="Pharmacy"
                 class="w-full h-[450px] object-cover transform group-hover:scale-110 transition duration-700 ease-out">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-8 left-8 text-left text-white transition-all duration-500 group-hover:translate-y-[-8px]">
              <h3 class="text-3xl font-bold drop-shadow-lg">Pharmacy</h3>
              <p class="text-md mt-2 max-w-sm opacity-90">Trusted pharmacy offering genuine medicines around the clock.</p>
            </div>
          </div>

          <!-- Laboratory -->
          <div class="swiper-slide relative rounded-3xl overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/lab (2).jpg') }}" alt="Laboratory"
                 class="w-full h-[450px] object-cover transform group-hover:scale-110 transition duration-700 ease-out">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-8 left-8 text-left text-white transition-all duration-500 group-hover:translate-y-[-8px]">
              <h3 class="text-3xl font-bold drop-shadow-lg">Laboratory</h3>
              <p class="text-md mt-2 max-w-sm opacity-90">Cutting-edge diagnostics for reliable and timely test results.</p>
            </div>
          </div>

          <!-- Rehabilitation -->
          <div class="swiper-slide relative rounded-3xl overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/rihab.jpg') }}" alt="Rehabilitation"
                 class="w-full h-[450px] object-cover transform group-hover:scale-110 transition duration-700 ease-out">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
            <div class="absolute bottom-8 left-8 text-left text-white transition-all duration-500 group-hover:translate-y-[-8px]">
              <h3 class="text-3xl font-bold drop-shadow-lg">Rehabilitation</h3>
              <p class="text-md mt-2 max-w-sm opacity-90">Restoring strength and mobility through personalized therapy.</p>
            </div>
          </div>

        </div>

        <!-- Navigation -->
        <div class="swiper-button-next !text-gray-900 !bg-white/70 !rounded-full !w-12 !h-12 !flex !items-center !justify-center hover:!bg-white shadow-lg"></div>
        <div class="swiper-button-prev !text-gray-900 !bg-white/70 !rounded-full !w-12 !h-12 !flex !items-center !justify-center hover:!bg-white shadow-lg"></div>
      </div>
    </div>
  </div>
</section>

<!-- SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 40,
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    effect: "coverflow",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 150,
      modifier: 1,
      slideShadows: false,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>

<!-- SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>



<script src="https://cdn.tailwindcss.com"></script>

@endsection
