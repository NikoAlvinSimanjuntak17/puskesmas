@extends('layouts.app')

@section('title', $setting->site_title ?? __('tran.hero_title'))

@section('content')
<main class="main">
<!-- Hero Section -->
<section class="relative flex items-center justify-center min-h-[calc(100vh-80px)] overflow-hidden">
  <!-- Background Video -->
  <img src="{{ asset('images/puskes.jpeg') }}" class="w-full h-full object-cover">   

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black/90 z-10"></div>

  <!-- Headline -->
  <div class="absolute bottom-16 left-10 z-20 text-left">
    <h1 class="max-w-xl text-4xl md:text-5xl font-extrabold text-white leading-snug drop-shadow-xl animate-fadeUp">
      Pelayanan Kesehatan Unggul dengan Kepedulian Sepenuh Hati
    </h1>
    <div class="w-24 h-1 bg-blue-500 mt-3 rounded"></div> <!-- Accent bar -->
  </div>
</section>

<!-- Custom Animation -->
<style>
  @keyframes fadeUp {
    0% {
      opacity: 0;
      transform: translateY(40px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .animate-fadeUp {
    animation: fadeUp 1.2s ease-out forwards;
  }
</style>

</main>




<!-- Animate.css for smooth animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<!-- Animate.css for smooth animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Services Section -->
<section id="services" class="services section py-5">
  <div class="container section-title text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold">Layanan Puskesmas</h2>
    <p class="text-muted">We provide a wide range of healthcare services to ensure your well-being.</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <!-- Service 1 -->
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <div class="service-item text-center p-4 rounded shadow-sm h-100">
    <div class="icon mb-3 text-primary fs-1">
      <i class="bi bi-hospital"></i>
    </div>
    <h3>Poli Umum</h3>
    <p>
      Pelayanan kesehatan umum untuk pemeriksaan, diagnosis, dan pengobatan berbagai keluhan medis ringan hingga sedang secara menyeluruh.
    </p>
  </div>
</div>

      <!-- Service 2 -->
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
  <div class="service-item text-center p-4 rounded shadow-sm h-100">
    <div class="icon mb-3 text-success fs-1">
      <i class="bi bi-bandaid"></i>
    </div>
    <h3>Pelayanan Gawat Darurat</h3>
    <p>
      Pelayanan darurat untuk penanganan cepat dan tepat pada kondisi medis yang membutuhkan tindakan segera.
    </p>
  </div>
</div>

      <!-- Service 3 -->
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
  <div class="service-item text-center p-4 rounded shadow-sm h-100">
    <div class="icon mb-3 text-danger fs-1">
      <i class="bi bi-emoji-smile"></i>
    </div>
    <h3>Poli Gigi</h3>
    <p>
      Pelayanan kesehatan gigi dan mulut meliputi pemeriksaan, penambalan, pencabutan, serta edukasi perawatan gigi untuk menjaga kesehatan optimal.
    </p>
  </div>
</div>

      <!-- Service 4 -->
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
  <div class="service-item text-center p-4 rounded shadow-sm h-100">
    <div class="icon mb-3 text-warning fs-1">
      <i class="bi bi-person-hearts"></i>
    </div>
    <h3>Poli KIA</h3>
    <p>
      Pelayanan kesehatan ibu dan anak meliputi pemeriksaan kehamilan, imunisasi, pemantauan tumbuh kembang anak, serta konsultasi kesehatan keluarga.
    </p>
  </div>
</div>

      <!-- Service 5 -->
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
  <div class="service-item text-center p-4 rounded shadow-sm h-100">
    <div class="icon mb-3 text-info fs-1">
      <i class="bi bi-capsule"></i>
    </div>
    <h3>Farmasi</h3>
    <p>
      Menyediakan obat-obatan lengkap sesuai resep dokter serta layanan konsultasi penggunaan obat yang aman dan tepat.
    </p>
  </div>
</div>

      <!-- Service 6 -->
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
  <div class="service-item text-center p-4 rounded shadow-sm h-100">
    <div class="icon mb-3 text-secondary fs-1">
      <i class="bi bi-person"></i>
    </div>
    <h3>Poli Lansia</h3>
    <p>
      Pelayanan kesehatan khusus bagi lanjut usia meliputi pemeriksaan rutin, pengelolaan penyakit kronis, serta konsultasi untuk menjaga kualitas hidup yang lebih baik.
    </p>
  </div>
</div>

    </div>
  </div>
</section>
@php
$dept = [
  [
    'id' => 1,
    'name' => 'Poli Umum',
    'icon' => 'bi-heart-pulse',
    'short_description' => 'Pelayanan kesehatan umum',
    'description' => 'Pelayanan kesehatan umum untuk pemeriksaan, diagnosis, dan pengobatan berbagai keluhan medis.',
    'photo' => 'poli-umum.jpg'
  ],
  [
    'id' => 2,
    'name' => 'Poli Gigi',
    'icon' => 'bi-emoji-smile',
    'short_description' => 'Perawatan gigi dan mulut',
    'description' => 'Pelayanan kesehatan gigi meliputi pemeriksaan, penambalan, dan pencabutan.',
    'photo' => 'poli-gigi.jpg'
  ],
  [
    'id' => 3,
    'name' => 'Poli KIA',
    'icon' => 'bi-person-hearts',
    'short_description' => 'Kesehatan ibu dan anak',
    'description' => 'Pelayanan kesehatan ibu dan anak termasuk imunisasi dan pemeriksaan kehamilan.',
    'photo' => 'poli-kia.jpg'
  ],
  [
    'id' => 4,
    'name' => 'Poli Lansia',
    'icon' => 'bi-person',
    'short_description' => 'Pelayanan lansia',
    'description' => 'Pelayanan kesehatan khusus untuk lanjut usia termasuk pemeriksaan rutin.',
    'photo' => 'poli-lansia.jpg'
  ]
];
@endphp

<section id="departments" class="relative py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Title -->
    <div class="text-center mb-14">
      <h2 class="text-4xl font-extrabold text-gray-900">
        
      </h2>
      <p class="mt-3 text-gray-600 max-w-2xl mx-auto">
        Berbagai layanan kesehatan terbaik untuk masyarakat.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">

      <!-- Tabs -->
      <aside>
        <ul class="flex flex-col gap-3">
          @foreach($dept as $index => $item)
          <li>
            <a href="#departments-tab-{{ $item['id'] }}"
               data-dept-tab
               data-target="departments-tab-{{ $item['id'] }}"
               class="group flex items-center gap-3 w-full px-4 py-3 rounded-lg transition-all
                      {{ $index === 0
                        ? 'bg-cyan-800 text-white shadow-md'
                        : 'text-gray-700 hover:bg-gray-100' }}">

              <span class="grid place-content-center w-9 h-9 rounded-md
                           {{ $index === 0 ? 'bg-white/20' : 'bg-gray-200 group-hover:bg-gray-300' }}">
                <i class="bi {{ $item['icon'] }}"></i>
              </span>

              <span class="font-medium">{{ $item['name'] }}</span>
            </a>
          </li>
          @endforeach
        </ul>
      </aside>

      <!-- Panels -->
      <div class="lg:col-span-3">
        <div class="bg-white rounded-xl p-8 shadow-md">

          @foreach($dept as $index => $item)
          <div id="departments-tab-{{ $item['id'] }}"
               class="dept-pane {{ $index === 0 ? '' : 'hidden' }}">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">

              <!-- Text -->
              <div class="lg:col-span-2">
                <h3 class="text-2xl font-bold text-gray-900">
                  {{ $item['name'] }}
                </h3>

                <p class="mt-2 text-gray-500 italic">
                  {{ $item['short_description'] }}
                </p>

                <p class="mt-4 text-gray-700 leading-relaxed">
                  {{ $item['description'] }}
                </p>

                <div class="mt-6">
                  <a href="#services"
                     class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-semibold
                            bg-cyan-800 text-white shadow hover:bg-cyan-700 transition">
                    Selengkapnya <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>

              <!-- Image -->
              <div>
                <div class="relative rounded-xl overflow-hidden shadow-md">
                  <img src="{{ asset('images/' . $item['photo']) }}"
                       alt="{{ $item['name'] }}"
                       class="w-full h-72 object-cover">
                </div>
              </div>

            </div>
          </div>
          @endforeach

        </div>
      </div>

    </div>
  </div>

  <!-- Tabs JS -->
  <script>
    const tabs = document.querySelectorAll('[data-dept-tab]');
    const panes = document.querySelectorAll('.dept-pane');

    tabs.forEach(tab => {
      tab.addEventListener('click', e => {
        e.preventDefault();

        panes.forEach(p => p.classList.add('hidden'));
        tabs.forEach(t => t.classList.remove('bg-cyan-800','text-white'));

        const target = document.getElementById(tab.dataset.target);
        target.classList.remove('hidden');

        tab.classList.add('bg-cyan-800','text-white');
      });
    });
  </script>
</section>


<!-- Leadership Team Section -->
<section id="leadership" class="team section py-5" style="background: #f8faff;">
  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-dark">Tim Dokter</h2>
      <p class="text-muted fs-5">Meet our distinguished doctors leading healthcare innovation and patient care excellence.</p>
    </div>

    <div class="row gy-4">

      <!-- Doctor Card -->
      @php
        $doctors = [
          [
            "name" => "Dr. John Carter",
            "role" => "Chief Surgeon",
            "desc" => "Pioneer in cardiothoracic surgery with 20+ years of excellence.",
            "img"  => "images/mal.jpg",
            "modal" => "doctor1Modal",
            "spec" => "Cardiothoracic Surgery",
            "exp"  => "20+ Years",
            "bio"  => "Dr. John Carter is an award-winning surgeon, globally recognized for minimally invasive heart surgery innovations. He leads our surgical excellence program and mentors upcoming specialists."
          ],
          [
            "name" => "Dr. Sarah Wilson",
            "role" => "Head of Pediatrics",
            "desc" => "Dedicated to holistic child health & family-centered care.",
            "img"  => "images/fem1.jpg",
            "modal" => "doctor2Modal",
            "spec" => "Pediatrics",
            "exp"  => "15+ Years",
            "bio"  => "Dr. Sarah Wilson is committed to holistic child development and family-centered pediatric care. She has pioneered community health programs and advanced pediatric research."
          ],
          [
            "name" => "Dr. Michael Adams",
            "role" => "Chief Medical Officer",
            "desc" => "Champion of innovation and patient-focused treatment.",
            "img"  => "images/male.jpg",
            "modal" => "doctor3Modal",
            "spec" => "Internal Medicine",
            "exp"  => "18+ Years",
            "bio"  => "Dr. Michael Adams oversees patient-centered care and hospital-wide innovation. His leadership integrates advanced treatments with compassionate service delivery."
          ],
          [
            "name" => "Dr. Emily Brown",
            "role" => "Head of Emergency",
            "desc" => "Expert in life-saving care & emergency response.",
            "img"  => "images/fem2.jpg",
            "modal" => "doctor4Modal",
            "spec" => "Emergency & Trauma Care",
            "exp"  => "12+ Years",
            "bio"  => "Dr. Emily Brown is a renowned emergency specialist with expertise in trauma response and critical care. She has led rapid-response teams in high-pressure environments worldwide."
          ],
        ];
      @endphp

      @foreach($doctors as $index => $doc)
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ ($index+1)*100 }}">
        <div class="team-member position-relative rounded-4 shadow-lg overflow-hidden doctor-card">
          <img src="{{ asset($doc['img']) }}" alt="{{ $doc['name'] }}" class="w-100 doctor-img" style="height: 320px; object-fit: cover;">
          <div class="overlay d-flex flex-column justify-content-end p-3">
            <h5 class="fw-bold text-white mb-1">{{ $doc['name'] }}</h5>
            <small class="text-light fw-semibold">{{ $doc['role'] }}</small>
            <button class="btn btn-primary btn-sm rounded-pill mt-2 px-3" data-bs-toggle="modal" data-bs-target="#{{ $doc['modal'] }}">
              View Profile
            </button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Doctor Modals -->
@foreach($doctors as $doc)
<div class="modal fade" id="{{ $doc['modal'] }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg overflow-hidden">
      
      <!-- Modal Header -->
      <div class="modal-header border-0 bg-dark text-white">
        <h5 class="modal-title">{{ $doc['name'] }} – {{ $doc['role'] }}</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-4">
        <div class="d-flex align-items-start">
          <img src="{{ asset($doc['img']) }}" class="rounded-3 me-4 border border-3 border-primary shadow" width="160" height="200" style="object-fit: cover;" alt="{{ $doc['name'] }}">
          <div>
            <p><strong>Specialization:</strong> {{ $doc['spec'] }}</p>
            <p><strong>Experience:</strong> {{ $doc['exp'] }}</p>
            <p class="text-muted">{{ $doc['bio'] }}</p>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer border-0 bg-light justify-content-start">
        <a href="#" class="social-link me-3 text-primary fs-5"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="social-link me-3 text-info fs-5"><i class="bi bi-twitter"></i></a>
        <a href="#" class="social-link text-success fs-5"><i class="bi bi-mortarboard"></i></a>
      </div>
    </div>
  </div>
</div>
@endforeach

<style>
.doctor-card .overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0.1));
  opacity: 0;
  transition: all 0.4s ease;
}
.doctor-card:hover .overlay {
  opacity: 1;
}
.doctor-card h5, .doctor-card small, .doctor-card button {
  transform: translateY(20px);
  transition: 0.4s ease;
}
.doctor-card:hover h5,
.doctor-card:hover small,
.doctor-card:hover button {
  transform: translateY(0);
}
</style>



<!-- FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>






<!-- About Section -->
<section id="about" class="relative py-20 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- Image + Video -->
      <div class="relative group">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl ring-1 ring-black/10">
          <img 
            src="{{ $setting->about_image ?? asset('assets/img/about.jpg') }}" 
            alt="About Our Hospital"
            class="w-full h-[420px] object-cover transition-transform duration-700 group-hover:scale-105"
          >

          @if(optional($setting)->about_video)
          <!-- Play Button -->
          <a href="{{ optional($setting)->about_video }}" 
             class="absolute inset-0 flex items-center justify-center">
            <span class="relative flex items-center justify-center w-20 h-20 rounded-full 
                         bg-white/20 backdrop-blur-md text-white shadow-lg ring-1 ring-white/40
                         animate-pulse hover:scale-110 transition">
              <i class="bi bi-play-fill text-3xl"></i>
            </span>
          </a>
          @endif
        </div>
      </div>

      <!-- Text Content -->
      <div class="relative">
        <h6 class="text-sm uppercase font-semibold tracking-wider text-blue-600 mb-2">
          Tentang Puskesmas
        </h6>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-snug mb-6">
          {{ $setting->about_title ?? 'Keunggulan dalam Pelayanan Kesehatan, Kepedulian dalam Pelayanan' }}
        </h2>
        
        <p class="text-gray-600 leading-relaxed mb-6">
          {{ $setting->about_description ?? "Puskesmas Setia Janji adalah Puskesmas yang terletak di Desa Urung Pane Dusun IV Kecamatan Setia Janji. Adapun Puskesmas ini sebelumnya berada di Desa Bangun Sari dan direlokasi ke Desa Urung Pane pada Bulan April Tahun 2024." }}
        </p>

        @if($about_us)
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          @foreach($about_us as $feature)
          <div class="flex items-start gap-4">
            <!-- Icon -->
            <div class="flex items-center justify-center w-12 h-12 rounded-xl 
                        bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md">
              <i class="{{ $feature->icon }} text-lg"></i>
            </div>
            <!-- Text -->
            <div>
              <h5 class="font-semibold text-gray-900 mb-1">{{ $feature->title }}</h5>
              <p class="text-gray-500 text-sm">{{ $feature->description }}</p>
            </div>
          </div>
          @endforeach
        </div>
        @endif

        <!-- CTA -->
        <div class="mt-8">
          <a href="#services" 
             class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-medium text-white
                    bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 shadow-lg
                    hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition">
            Learn More <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- =====================
     Stats Section
===================== -->
{{-- <section id="stats" class="stats section py-5 position-relative overflow-hidden" 
         style="background: linear-gradient(180deg, #f8faff 0%, #ffffff 100%);">
  
  <!-- Background Dots -->
  <div class="dots-bg"></div>

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 justify-content-center">

      <!-- Doctor Specialists -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center p-4 rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center hover-scale bg-gradient-blue text-white">
          <div class="icon-wrapper d-flex align-items-center justify-content-center mb-3 rounded-circle shadow bg-white bg-opacity-25"
               style="width:75px; height:75px;">
            <i class="bi bi-hospital fs-3"></i>
          </div>
          <h2 class="fw-bold mb-1 display-6">
            <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1.5" class="purecounter"></span>+
          </h2>
          <p class="fw-semibold">Doctor Specialists</p>
        </div>
      </div>

      <!-- Happy Patients -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center p-4 rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center hover-scale bg-gradient-blue text-white">
          <div class="icon-wrapper d-flex align-items-center justify-content-center mb-3 rounded-circle shadow bg-white bg-opacity-25"
               style="width:75px; height:75px;">
            <i class="bi bi-people-fill fs-3"></i>
          </div>
          <h2 class="fw-bold mb-1 display-6">
            <span data-purecounter-start="0" data-purecounter-end="120000" data-purecounter-duration="2" class="purecounter"></span>+
          </h2>
          <p class="fw-semibold">Happy Patients</p>
        </div>
      </div>

      <!-- Surgeries Performed -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center p-4 rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center hover-scale bg-gradient-blue text-white">
          <div class="icon-wrapper d-flex align-items-center justify-content-center mb-3 rounded-circle shadow bg-white bg-opacity-25"
               style="width:75px; height:75px;">
            <i class="bi bi-heart-pulse fs-3"></i>
          </div>
          <h2 class="fw-bold mb-1 display-6">
            <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="2" class="purecounter"></span>+
          </h2>
          <p class="fw-semibold">Surgeries Performed</p>
        </div>
      </div>

      <!-- Clinics Worldwide -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center p-4 rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center hover-scale bg-gradient-blue text-white">
          <div class="icon-wrapper d-flex align-items-center justify-content-center mb-3 rounded-circle shadow bg-white bg-opacity-25"
               style="width:75px; height:75px;">
            <i class="bi bi-globe2 fs-3"></i>
          </div>
          <h2 class="fw-bold mb-1 display-6">
            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1.5" class="purecounter"></span>+
          </h2>
          <p class="fw-semibold">Clinics Worldwide</p>
        </div>
      </div>

    </div>
  </div>
</section> --}}

<!-- Styles -->
<style>
  .hover-scale {
    transition: all 0.35s ease;
  }
  .hover-scale:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 12px 28px rgba(0,0,0,0.18);
  }

  /* Single Gradient Theme for All Cards */
  .bg-gradient-blue {
    background: linear-gradient(135deg, #0d6efd, #0dcaf0);
  }

  /* Floating dots */
  .dots-bg {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-image: radial-gradient(rgba(13, 110, 253, 0.06) 2px, transparent 2px);
    background-size: 40px 40px;
    animation: moveDots 14s linear infinite;
    z-index: 0;
  }
  @keyframes moveDots {
    from { background-position: 0 0; }
    to { background-position: 80px 80px; }
  }

  /* Ensure content stays above background */
  .stats .container {
    position: relative;
    z-index: 2;
  }
</style>

<!-- Purecounter -->
<script src="https://cdn.jsdelivr.net/npm/purecounterjs@1.5.0/dist/purecounter_vanilla.js"></script>





{{-- <section id="testimonials" class="testimonials section">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Testimonials</h3>
                <p>
                    Hear from our patients who trusted us with their health and experienced world-class care.
                </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          }
                        }
                    </script>

                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ asset('images/fi.jpg') }}" class="testimonial-img flex-shrink-0" alt="Dr. Helen Johnson">
                                    <div>
                                        <h3>Dr. Helen Johnson</h3>
                                        <h4>Cardiology Patient</h4>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>The doctors and nurses were amazing. I felt safe and cared for throughout my treatment.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ asset('images/n.jpg') }}" class="testimonial-img flex-shrink-0" alt="Samuel Tadesse">
                                    <div>
                                        <h3>Samuel Tadesse</h3>
                                        <h4>Orthopedic Patient</h4>
                                        <div class="stars">
                                            @for ($i = 0; $i < 4; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Excellent service! The recovery program helped me get back on my feet faster than expected.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ asset('images/f (2).jpg') }}" class="testimonial-img flex-shrink-0" alt="Fatima Noor">
                                    <div>
                                        <h3>Fatima Noor</h3>
                                        <h4>Maternity Patient</h4>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>I will forever be grateful for the care during my pregnancy and delivery. The staff was outstanding!</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ asset('images/j.jpg') }}" class="testimonial-img flex-shrink-0" alt="John Smith">
                                    <div>
                                        <h3>John Smith</h3>
                                        <h4>Emergency Care</h4>
                                        <div class="stars">
                                            @for ($i = 0; $i < 4; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quick response and very professional emergency service. Highly recommend this hospital.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="{{ asset('images/ma.jpg') }}" class="testimonial-img flex-shrink-0" alt="Maria Lopez">
                                    <div>
                                        <h3>Maria Lopez</h3>
                                        <h4>Surgery Patient</h4>
                                        <div class="stars">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>The surgery team was top-notch. They explained everything clearly and made me feel comfortable.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>

    </div>
</section> --}}
<!-- Partners Section -->
{{-- <section id="partners" class="bg-slate-50 py-16">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold text-blue-700 mb-10 relative inline-block">
      Our Partners
      <span class="block w-20 h-1 bg-blue-700 mx-auto mt-3 rounded"></span>
    </h2>

    <!-- Scroll Wrapper -->
    <div class="overflow-hidden relative w-full">
      <div class="flex gap-20 animate-scroll hover:[animation-play-state:paused]">
        <!-- If dynamic data exists -->
        @if(isset($partners) && count($partners))
          @foreach($partners as $partner)
            <img 
              src="{{ asset(images/ethio.jpg) }}" 
              alt="{{ $partner->name }}" 
              class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition duration-300 ease-in-out"
            >
          @endforeach

          <!-- duplicate for seamless looping -->
          @foreach($partners as $partner)
            <img 
              src="{{ asset(images/eph.jpg) }}" 
              alt="{{ $partner->name }}" 
              class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition duration-300 ease-in-out"
            >
          @endforeach
        @else
          <!-- Fallback demo logos -->
          <img src="{{ asset('images/ethio.jpg') }}" alt="Partner 1" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
          <img src="{{ asset('images/ethiotel.jpg') }}" alt="Partner 2" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
          <img src="{{ asset('images/comm.jpg') }}" alt="Partner 3" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
          <img src="{{ asset('images/eph.jpg') }}" alt="Partner 4" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">

          <!-- Duplicate for loop -->
          <img src="{{ asset('images/ethio.jpg') }}" alt="Partner 1" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
          <img src="{{ asset('images/ethiotel.jpg') }}" alt="Partner 2" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
          <img src="{{ asset('images/comm.jpg') }}" alt="Partner 3" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
          <img src="{{ asset('images/eph.jpg') }}" alt="Partner 4" class="w-36 h-20 object-contain filter grayscale hover:grayscale-0 hover:scale-110 transition">
        @endif
      </div>
    </div>
  </div>
</section> --}}

<!-- Tailwind custom animation -->
<style>
@keyframes scroll {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.animate-scroll {
  animation: scroll 25s linear infinite;
}
</style>

</style>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

















<!-- =====================
     Contact Section
===================== -->
{{-- <section id="contact" class="contact section py-5 position-relative" style="background: linear-gradient(180deg, #f8faff 0%, #ffffff 100%);">

  <div class="container section-title mb-5 text-center" data-aos="fade-up">
    <h2 class="fw-bold text-primary">{{ $setting->contact_title ?? __('tran.contact') }}</h2>
    <p class="text-muted">{{ $setting->contact_description ?? __('tran.contact_description') }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <!-- Contact Info -->
      <div class="col-lg-4">
        <div class="d-flex flex-column gap-4">

          <!-- Location -->
          <div class="info-item d-flex align-items-start p-4 bg-white rounded-4 shadow-sm hover-card" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-wrapper me-3 rounded-circle bg-gradient-blue text-white d-flex align-items-center justify-content-center">
              <i class="bi bi-geo-alt fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold">{{ __('tran.location') }}</h5>
            <p class="mb-0 text-muted">{{ optional($setting)->address }}</p>            
            </div>
          </div>

          <!-- Phone -->
          <div class="info-item d-flex align-items-start p-4 bg-white rounded-4 shadow-sm hover-card" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-wrapper me-3 rounded-circle bg-gradient-blue text-white d-flex align-items-center justify-content-center">
              <i class="bi bi-telephone fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold">{{ __('tran.call_us') }}</h5>
              <p class="mb-0 text-muted">{{ optional($setting)->phone }}</p>
            </div>
          </div>

          <!-- Email -->
          <div class="info-item d-flex align-items-start p-4 bg-white rounded-4 shadow-sm hover-card" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-wrapper me-3 rounded-circle bg-gradient-blue text-white d-flex align-items-center justify-content-center">
              <i class="bi bi-envelope fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold">{{ __('tran.email_us') }}</h5>
              <p class="mb-0 text-muted">{{ optional($setting)->email }}</p>
            </div>
          </div>

        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="card border-0 rounded-4 shadow-lg p-4 p-md-5 bg-white" data-aos="fade-left" data-aos-delay="200">
          <form action="{{ route('contact.send') }}" method="post" class="php-email-form">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control premium-input" placeholder="{{ __('tran.your_name') }}" required>
              </div>

              <div class="col-md-6">
                <input type="email" name="email" class="form-control premium-input" placeholder="{{ __('tran.your_email') }}" required>
              </div>

              <div class="col-md-12">
                <input type="text" name="subject" class="form-control premium-input" placeholder="{{ __('tran.subject') }}" required>
              </div>

              <div class="col-md-12">
                <textarea name="message" rows="6" class="form-control premium-input" placeholder="{{ __('tran.message') }}" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading small">{{ __('tran.loading') }}</div>
                <div class="error-message"></div>
                <div class="sent-message text-success fw-semibold">{{ __('tran.sent_message') }}</div>
                <button type="submit" class="btn btn-gradient px-5 py-2 rounded-pill shadow mt-3">{{ __('tran.send_message') }}</button>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section> --}}

<!-- Styles -->
<style>
  /* Gradient blue for icons */
  .bg-gradient-blue {
    background: linear-gradient(135deg, #0d6efd, #0dcaf0);
    width: 45px;
    height: 45px;
  }

  /* Hover effect for info cards */
  .hover-card {
    transition: all 0.35s ease;
  }
  .hover-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.12);
  }

  /* Premium input fields */
  .premium-input {
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 12px 16px;
    transition: all 0.3s ease;
  }
  .premium-input:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
  }

  /* Gradient button */
  .btn-gradient {
    background: linear-gradient(135deg, #0d6efd, #0dcaf0);
    color: #fff;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  .btn-gradient:hover {
    background: linear-gradient(135deg, #0b5ed7, #0bbcd6);
    color: #fff;
    transform: translateY(-2px);
  }
</style>

</main>
@endsection
