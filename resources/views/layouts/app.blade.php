<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'My Hospital Website')</title>
    <meta name="description" content="@yield('meta_description', 'Best hospital services and health care')">
    <meta name="keywords" content="@yield('meta_keywords', 'hospital, doctors, health, clinic')">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">



    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->
    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center ">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:contact@myhospital.com">setiajanji@puskesmas.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <span>+62 800 123 4567</span>
                    </i>

                </div>
                    {{-- <div class="lang-switch dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
        {{ strtoupper(app()->getLocale()) }}
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">{{ __('tran.health_info') }}</a></li>
        <li><a class="dropdown-item" href="{{ route('lang.switch', 'am') }}">{{ __('tran.health_info') }}</a></li>
    </ul>
</div> --}}

            </div>
        </div>

        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                    <h1 class="sitename">PUSKESMAS SETIA JANJI</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('departments.index') }}" class="{{ request()->routeIs('departments.*') ? 'active' : '' }}">Services</a></li>
                         <li><a href="{{ route('doctors.index') }}" class="{{ request()->routeIs('doctors.*') ? 'active' : '' }}">Doctors</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        
                       
                        <li><a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">Contact</a></li>
               <li>
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
            More
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="{{ route('health.index') }}">Health Info</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('news.index') }}">News</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('faqs.index') }}">FAQs</a>
            </li>
        </ul>
    </div>
</li>

                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>




    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

<!-- Footer -->
<footer id="footer" class="bg-cyan-700 text-gray-300 mt-12">
    <div class="container mx-auto grid md:grid-cols-3 gap-12 py-12 px-6">

        <!-- Logo + Tagline (Left) -->
        <div>
            <div class="flex items-center space-x-3 mb-4">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-14 w-14">
                <span class="text-2xl font-bold text-white">Puskesmas Setia Janji</span>
            </div>
            <p class="text-gray-400 leading-relaxed mb-4">
                Caring for you with excellence and compassion.  
                Your health, our priority.
            </p>

            <!-- Social Media Icons -->
            <div class="flex space-x-4 mt-2">
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition">
                    <i class="bi bi-facebook text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition">
                    <i class="bi bi-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition">
                    <i class="bi bi-linkedin text-xl"></i>
                </a>
            </div>
        </div>

        <!-- Quick Links (Center) -->
        <div class="text-center">
            <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
            <ul class="space-y-2">
                <li><a href="{{ route('home') }}" class="hover:text-cyan-300 transition">Home</a></li>
                <li><a href="{{ route('departments.index') }}" class="hover:text-cyan-300 transition">Services</a></li>
                <li><a href="{{ route('doctors.index') }}" class="hover:text-cyan-300 transition">Doctors</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-cyan-300 transition">About</a></li>
                <li><a href="{{ route('contact.index') }}" class="hover:text-cyan-300 transition">Contact</a></li>
                <li><a href="{{ route('news.index') }}" class="hover:text-cyan-300 transition">News</a></li>
            </ul>
        </div>

        <!-- Contact + Map (Right) -->
        <div class="md:text-right">
            <h4 class="text-lg font-semibold text-white mb-4">Contact Us</h4>
            <p class="text-gray-400">Desa Urung Pane Dusun IV Kecamatan Setia Janji</p>
            <p class="text-gray-400 mt-2"><strong>Phone:</strong> +628001234567</p>
            <p class="text-gray-400"><strong>Email:</strong> contact@setiajanji.com</p>
            <div class="mt-4 rounded-lg overflow-hidden shadow-lg border border-gray-700">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4888509539005!2d99.49399017542486!3d2.961770554274971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303237003ce018cd%3A0xc7dc529169f0e15f!2sUPTD%20PUSKESMAS%20SETIA%20JANJI!5e0!3m2!1sid!2sid!4v1775655806300!5m2!1sid!2sid" 
                    width="100%" height="160" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-700 py-5 text-center text-sm text-gray-400">
        <p>© {{ date('Y') }} <strong class="text-white">Puskesmas Setia Janji</strong>. All rights reserved.</p>
    </div>
</footer>



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html> 