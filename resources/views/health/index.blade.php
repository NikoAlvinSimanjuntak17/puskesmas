@extends('layouts.app')
@section('title', 'Health Info')

@section('content')
<div class="container py-5">
    <!-- Page Header -->
    <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="200">
        <h2 class="fw-bold display-5 text-primary mb-3">🌿 Health Information</h2>
        <p class="text-muted fs-5">Practical guides to improve your lifestyle and well-being.</p>
    </div>

    <div class="row g-4">
        <!-- Exercise -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden position-relative">
                <img src="{{ asset('images/exe.jpg') }}" class="card-img img-fluid" alt="Exercise">
                <div class="card-img-overlay d-flex flex-column justify-content-end bg-gradient-dark p-4">
                    <h5 class="fw-bold text-white mb-2">Exercise & Fitness</h5>
                    <p class="text-light small mb-3">
                        Daily physical activity strengthens your body, boosts mood, and improves long-term health.
                    </p>
                    <div class="d-flex gap-2">
                        <!-- Learn More Modal Trigger -->
                        <button class="btn btn-light btn-sm rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#exerciseModal">
                            <i class="bi bi-info-circle me-1"></i> Learn More
                        </button>
                        <!-- PDF Download -->
                        <a href="{{ asset('pdfs/exercise.pdf') }}" class="btn btn-success btn-sm rounded-pill px-3 shadow-sm" download>
                            <i class="bi bi-file-earmark-arrow-down me-1"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Healthy Diet -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
            <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden position-relative">
                <img src="{{ asset('images/diet.jpg') }}" class="card-img img-fluid" alt="Healthy Diet">
                <div class="card-img-overlay d-flex flex-column justify-content-end bg-gradient-dark p-4">
                    <h5 class="fw-bold text-white mb-2">Healthy Diet</h5>
                    <p class="text-light small mb-3">
                        Nutritious food fuels your body, prevents disease, and enhances performance.
                    </p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#dietModal">
                            <i class="bi bi-info-circle me-1"></i> Learn More
                        </button>
                        <a href="{{ asset('pdfs/diet.pdf') }}" class="btn btn-success btn-sm rounded-pill px-3 shadow-sm" download>
                            <i class="bi bi-file-earmark-arrow-down me-1"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stress Management -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="700">
            <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden position-relative">
                <img src="{{ asset('images/stress.jpg') }}" class="card-img img-fluid" alt="Stress Management">
                <div class="card-img-overlay d-flex flex-column justify-content-end bg-gradient-dark p-4">
                    <h5 class="fw-bold text-white mb-2">Stress Management</h5>
                    <p class="text-light small mb-3">
                        Learn how to relax, reduce anxiety, and balance your mental health for a healthier lifestyle.
                    </p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light btn-sm rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#stressModal">
                            <i class="bi bi-info-circle me-1"></i> Learn More
                        </button>
                        <a href="{{ asset('pdfs/stress.pdf') }}" class="btn btn-success btn-sm rounded-pill px-3 shadow-sm" download>
                            <i class="bi bi-file-earmark-arrow-down me-1"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODALS -->
<!-- Exercise Modal -->
<div class="modal fade" id="exerciseModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white rounded-top-4">
        <h5 class="modal-title">Exercise & Fitness</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <p>Regular exercise improves cardiovascular health, builds strength, reduces stress, and boosts overall immunity. Aim for at least 30 minutes of moderate activity most days of the week.</p>
      </div>
      <div class="modal-footer">
        <a href="{{ asset('pdfs/exercise.pdf') }}" class="btn btn-success rounded-pill px-4" download>
          <i class="bi bi-file-earmark-arrow-down me-1"></i> Download PDF
        </a>
        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Diet Modal -->
<div class="modal fade" id="dietModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white rounded-top-4">
        <h5 class="modal-title">Healthy Diet</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <p>A balanced diet rich in fruits, vegetables, whole grains, and lean protein ensures your body gets essential nutrients, improves energy, and reduces risk of chronic disease.</p>
      </div>
      <div class="modal-footer">
        <a href="{{ asset('pdfs/diet.pdf') }}" class="btn btn-success rounded-pill px-4" download>
          <i class="bi bi-file-earmark-arrow-down me-1"></i> Download PDF
        </a>
        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Stress Modal -->
<div class="modal fade" id="stressModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white rounded-top-4">
        <h5 class="modal-title">Stress Management</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <p>Managing stress is key to mental and physical well-being. Techniques like meditation, breathing exercises, and good sleep can reduce stress levels significantly.</p>
      </div>
      <div class="modal-footer">
        <a href="{{ asset('pdfs/stress.pdf') }}" class="btn btn-success rounded-pill px-4" download>
          <i class="bi bi-file-earmark-arrow-down me-1"></i> Download PDF
        </a>
        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Extra Styles -->
<style>
    .bg-gradient-dark {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.1));
    }
    .card {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 1.25rem 2.5rem rgba(0, 0, 0, 0.25) !important;
    }
    .card-img {
        height: 350px;
        object-fit: cover;
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
@endsection
