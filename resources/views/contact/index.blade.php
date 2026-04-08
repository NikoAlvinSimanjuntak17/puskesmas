@extends('layouts.app')

@section('title', 'Contact & Feedback')

@section('content')
<section id="contact" class="relative py-20 bg-gradient-to-br from-blue-50 via-white to-blue-100 overflow-hidden">

    <!-- Decorative Gradient Circles -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>

    <!-- Title -->
    <div class="container mx-auto px-6 lg:px-12 text-center relative z-10" data-aos="fade-up">
        <h2 class="text-5xl font-extrabold text-gray-900 mb-4 drop-shadow-lg">
            {{ $setting->contact_title ?? __('tran.contact') }}
        </h2>
        <p class="text-lg text-gray-700 max-w-2xl mx-auto leading-relaxed">
            {{ $setting->contact_description ?? __('tran.contact_description') }}
        </p>
    </div>

    <div class="container mx-auto px-6 lg:px-12 mt-14 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <!-- Info Section -->
            <div class="space-y-6">
                <!-- Address -->
                <div class="backdrop-blur-md bg-white/70 shadow-xl rounded-2xl p-6 flex items-start gap-4 hover:shadow-2xl hover:-translate-y-1 transition-all duration-500"
                     data-aos="fade-right" data-aos-delay="100">
                    <i class="bi bi-geo-alt text-4xl text-blue-700"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ __('tran.location') }}</h3>
                        <p class="text-gray-700">{{ $setting->address ?? '-' }}</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="backdrop-blur-md bg-white/70 shadow-xl rounded-2xl p-6 flex items-start gap-4 hover:shadow-2xl hover:-translate-y-1 transition-all duration-500"
                     data-aos="fade-right" data-aos-delay="300">
                    <i class="bi bi-telephone text-4xl text-green-700"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ __('tran.call_us') }}</h3>
                        <p class="text-gray-700">{{ $setting->phone ?? '-' }}</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="backdrop-blur-md bg-white/70 shadow-xl rounded-2xl p-6 flex items-start gap-4 hover:shadow-2xl hover:-translate-y-1 transition-all duration-500"
                     data-aos="fade-right" data-aos-delay="500">
                    <i class="bi bi-envelope text-4xl text-red-700"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ __('tran.email_us') }}</h3>
                        <p class="text-gray-700">{{ $setting->email ?? '-' }}</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="backdrop-blur-xl bg-white/80 shadow-2xl rounded-2xl p-10 hover:shadow-3xl transition duration-500"
                     data-aos="fade-left" data-aos-delay="700">
                    <form action="{{ route('contact.send') }}" method="post" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="{{ __('tran.your_name') }}" required
                                class="w-full border-gray-300 rounded-xl shadow-sm p-4 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 placeholder-gray-400">
                            
                            <input type="email" name="email" placeholder="{{ __('tran.your_email') }}" required
                                class="w-full border-gray-300 rounded-xl shadow-sm p-4 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 placeholder-gray-400">
                        </div>

                        <input type="text" name="subject" placeholder="{{ __('tran.subject') }}" required
                            class="w-full border-gray-300 rounded-xl shadow-sm p-4 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 placeholder-gray-400">

                        <textarea name="message" rows="6" placeholder="{{ __('tran.message') }}" required
                            class="w-full border-gray-300 rounded-xl shadow-sm p-4 focus:ring-2 focus:ring-blue-600 focus:border-blue-600 placeholder-gray-400"></textarea>

                        <div class="text-center">
                            <button type="submit"
                                class="px-10 py-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white text-lg font-semibold rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500">
                                ✉️ {{ __('tran.send_message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!-- Map Section -->
<section id="map" class="w-screen mt-12">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Find Us Here</h2>
    <p class="text-gray-500">We’re located in the heart of the city, easy to reach.</p>
  </div>
  <div class="relative w-full h-[400px]">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.987954085619!2d-74.00601528459357!3d40.712775979330116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjAiTiA3NMKwMDAnMjAuMCJX!5e0!3m2!1sen!2sus!4v1634234234234"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      class="absolute inset-0 w-full h-full">
    </iframe>
  </div>
</section>




<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

@endsection
