@extends('layouts.app')

@section('content')
<!-- News & Press Release Section -->
<section id="news" class="news section py-5" style="background: #f9fbff;">
  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-primary">Hospital News & Press Releases</h2>
      <p class="text-muted fs-5">Stay updated with our latest announcements, health updates, and media coverage.</p>
    </div>

    <div class="row gy-4">

      <!-- News Card -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="card border-0 shadow-lg rounded-4 h-100 hover-scale">
          <img src="{{ asset('images/pre.jpg') }}" class="card-img-top rounded-top-4" alt="News">
          <div class="card-body p-4">
            <span class="badge bg-primary mb-2">Press Release</span>
            <h5 class="fw-bold">New Emergency Wing Opened</h5>
            <p class="text-muted small">We proudly announce the grand opening of our state-of-the-art Emergency Care Unit.</p>
            <a href="#" class="text-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#newsModal1">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="card-footer bg-white border-0 text-muted small px-4 pb-3">
            <i class="bi bi-calendar-event me-1"></i> Aug 20, 2025
          </div>
        </div>
      </div>

      <!-- News Card -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="card border-0 shadow-lg rounded-4 h-100 hover-scale">
          <img src="{{ asset('images/camp.jpg') }}" class="card-img-top rounded-top-4" alt="News">
          <div class="card-body p-4">
            <span class="badge bg-success mb-2">Hospital News</span>
            <h5 class="fw-bold">Free Health Camp for Community</h5>
            <p class="text-muted small">Our doctors conducted a free health camp providing care to over 1,000 people.</p>
            <a href="#" class="text-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#newsModal2">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="card-footer bg-white border-0 text-muted small px-4 pb-3">
            <i class="bi bi-calendar-event me-1"></i> Jul 15, 2025
          </div>
        </div>
      </div>

      <!-- News Card -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="card border-0 shadow-lg rounded-4 h-100 hover-scale">
          <img src="{{ asset('images/news.jpg') }}" class="card-img-top rounded-top-4" alt="News">
          <div class="card-body p-4">
            <span class="badge bg-warning mb-2">Media Coverage</span>
            <h5 class="fw-bold">Hospital Featured in National News</h5>
            <p class="text-muted small">Our hospital was highlighted for outstanding contributions in patient care.</p>
            <a href="#" class="text-primary fw-semibold" data-bs-toggle="modal" data-bs-target="#newsModal3">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="card-footer bg-white border-0 text-muted small px-4 pb-3">
            <i class="bi bi-calendar-event me-1"></i> Jun 10, 2025
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- News Detail Modals -->
<div class="modal fade" id="newsModal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">New Emergency Wing Opened</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/pre.jpg') }}" class="img-fluid rounded mb-3" alt="">
        <p>Our hospital proudly inaugurates a state-of-the-art Emergency Care Unit designed to provide rapid, world-class treatment. The new wing is equipped with advanced diagnostic facilities, trauma care technology, and an expanded ICU capacity.</p>
        <p>This expansion strengthens our commitment to delivering life-saving care for critical patients and emergencies 24/7.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="newsModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Free Health Camp for Community</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/camp.jpg') }}" class="img-fluid rounded mb-3" alt="">
        <p>Our doctors recently organized a free medical camp aimed at providing essential healthcare services to the local community. Over 1,000 residents benefited from free checkups, medicines, and health awareness programs.</p>
        <p>This initiative reflects our hospital's commitment to community welfare and preventive healthcare.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="newsModal3" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Hospital Featured in National News</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/news.jpg') }}" class="img-fluid rounded mb-3" alt="">
        <p>We are honored to be featured in national media for our excellence in patient care and advanced healthcare services. The recognition highlights our dedication to innovation, compassionate treatment, and continuous improvement in the medical field.</p>
        <p>We thank our healthcare professionals, staff, and community for making this possible.</p>
      </div>
    </div>
  </div>
</div>

<style>
  .hover-scale {
    transition: all 0.3s ease;
  }
  .hover-scale:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }
  .card-img-top {
    object-fit: cover;
    height: 220px;
  }
</style>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
@endsection

