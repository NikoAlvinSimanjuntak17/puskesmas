@extends('layouts.app')

@section('content')
<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4 gx-5">

      <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
      </div>

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <h3>{{ $about->title }}</h3>
        <p>{{ $about->description }}</p>
        <ul>
          <li>
            <i class="fa-solid fa-vial-circle-check"></i>
            <div>
              <h5>{{ $about->mission_title }}</h5>
              <p>{{ $about->mission_text }}</p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-pump-medical"></i>
            <div>
              <h5>{{ $about->vision_title }}</h5>
              <p>{{ $about->vision_text }}</p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-heart-circle-xmark"></i>
            <div>
              <h5>{{ $about->values_title }}</h5>
              <p>{{ $about->values_text }}</p>
            </div>
          </li>
        </ul>
      </div>

    </div>

  </div>

</section>
<section id="history" class="relative py-24 bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-6 lg:px-12">

        <!-- Section Title -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-5xl font-extrabold text-gray-800 mb-4 tracking-tight">
                Our Journey Through Time
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                A legacy of healing, innovation, and compassion that continues to grow with every milestone.
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative">
            <!-- Center Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-500 to-blue-300"></div>

            <div class="space-y-16">
                
                <!-- Event 1 -->
                <div class="relative flex items-center justify-between" data-aos="fade-right">
                    <div class="w-5/12 text-right pr-8">
                        <h3 class="text-2xl font-semibold text-gray-800">1995 - Founded</h3>
                        <p class="text-gray-600 mt-2">
                            Our hospital was established with a mission to deliver accessible and quality healthcare to our community.
                        </p>
                    </div>
                    <div class="w-3 h-3 bg-blue-600 rounded-full border-4 border-white shadow-md"></div>
                    <div class="w-5/12"></div>
                </div>

                <!-- Event 2 -->
                <div class="relative flex items-center justify-between flex-row-reverse" data-aos="fade-left">
                    <div class="w-5/12 pl-8">
                        <h3 class="text-2xl font-semibold text-gray-800">2005 - Expansion</h3>
                        <p class="text-gray-600 mt-2">
                            We expanded with specialized departments in cardiology, pediatrics, and neurology to serve more patients.
                        </p>
                    </div>
                    <div class="w-3 h-3 bg-blue-600 rounded-full border-4 border-white shadow-md"></div>
                    <div class="w-5/12"></div>
                </div>

                <!-- Event 3 -->
                <div class="relative flex items-center justify-between" data-aos="fade-right">
                    <div class="w-5/12 text-right pr-8">
                        <h3 class="text-2xl font-semibold text-gray-800">2015 - Modern Facilities</h3>
                        <p class="text-gray-600 mt-2">
                            State-of-the-art facilities and cutting-edge technology redefined the way we provide healthcare.
                        </p>
                    </div>
                    <div class="w-3 h-3 bg-blue-600 rounded-full border-4 border-white shadow-md"></div>
                    <div class="w-5/12"></div>
                </div>

                <!-- Event 4 -->
                <div class="relative flex items-center justify-between flex-row-reverse" data-aos="fade-left">
                    <div class="w-5/12 pl-8">
                        <h3 class="text-2xl font-semibold text-gray-800">2023 - Leading Healthcare Provider</h3>
                        <p class="text-gray-600 mt-2">
                            Today, we stand as a trusted healthcare institution, serving thousands of patients every year with excellence.
                        </p>
                    </div>
                    <div class="w-3 h-3 bg-blue-600 rounded-full border-4 border-white shadow-md"></div>
                    <div class="w-5/12"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="certifications" class="py-20 bg-gradient-to-r from-gray-50 to-gray-100">
  <div class="max-w-6xl mx-auto px-6">
    
    <!-- Title -->
    <div class="text-center mb-14">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800">
        Our Certifications
      </h2>
      <div class="mt-3 w-20 h-1 bg-blue-600 mx-auto rounded"></div>
      <p class="mt-4 text-gray-600 max-w-xl mx-auto">
        Recognized for excellence in healthcare, ensuring trust and the highest quality standards.
      </p>
    </div>

    <!-- Certificates Row -->
    <div class="flex flex-col md:flex-row justify-center items-stretch gap-10">
      
      <!-- Certificate 1 -->
      <div class="bg-white shadow-lg rounded-2xl p-8 w-full md:w-1/2 flex flex-col items-center 
                  transform transition duration-500 hover:scale-105 hover:shadow-2xl 
                  animate-fade-in">
        <img src="{{ asset('images\cer2.jpg') }}" alt="JCI Accreditation" class="h-28 object-contain mb-4">
        <h3 class="text-xl font-semibold text-gray-800">JCI Accredited</h3>
        <p class="mt-2 text-center text-gray-600 text-sm">
          Awarded for meeting international patient safety and quality healthcare standards.
        </p>
      </div>

      <!-- Certificate 2 -->
      <div class="bg-white shadow-lg rounded-2xl p-8 w-full md:w-1/2 flex flex-col items-center 
                  transform transition duration-500 hover:scale-105 hover:shadow-2xl 
                  animate-fade-in delay-200">
        <img src="{{ asset('images/iso.png') }}" alt="ISO 9001:2015" class="h-28 object-contain mb-4">
        <h3 class="text-xl font-semibold text-gray-800">ISO 9001:2015</h3>
        <p class="mt-2 text-center text-gray-600 text-sm">
          Certified for implementing effective quality management systems in healthcare.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Tailwind Custom Animation -->
<style>
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
  animation: fadeIn 1s ease forwards;
}
.delay-200 {
  animation-delay: 0.3s;
}
</style>


<script src="https://cdn.tailwindcss.com"></script>






@endsection
