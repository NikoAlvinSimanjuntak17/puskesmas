@extends('layouts.app')

@section('content')
<!-- FAQ Section -->
<section id="faq" class="faq section py-5" style="background: #ffffff;">
  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold" style="color: #1a2a44;">Frequently Asked Questions</h2>
      <div class="mx-auto mb-3" style="width: 80px; height: 4px; background: #d4af37; border-radius: 2px;"></div>
      <p class="fs-5" style="color: #6c757d;">Find clear answers to the most common questions about our hospital, services, and patient care.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-container">

          <!-- Visiting Hours -->
          <div class="card border-0 shadow-sm rounded-4 mb-3 faq-item faq-active" style="background: #f9f9fb;">
            <div class="card-header d-flex justify-content-between align-items-center p-4 faq-header" style="cursor: pointer; background: #ffffff; border-radius: 1rem;">
              <h5 class="mb-0 fw-semibold" style="color: #1a2a44;">What are the visiting hours?</h5>
              <i class="faq-toggle bi bi-chevron-down fs-5" style="color: #d4af37;"></i>
            </div>
            <div class="faq-content px-4 pb-3" style="display: block;">
              <p class="mb-0" style="color: #555;">Visiting hours are from <strong>10:00 AM to 8:00 PM</strong> daily. For ICU patients, visiting is restricted to close family members with special permission.</p>
            </div>
          </div>

          <!-- Insurance -->
          <div class="card border-0 shadow-sm rounded-4 mb-3 faq-item" style="background: #f9f9fb;">
            <div class="card-header d-flex justify-content-between align-items-center p-4 faq-header" style="cursor: pointer; background: #ffffff; border-radius: 1rem;">
              <h5 class="mb-0 fw-semibold" style="color: #1a2a44;">Does the hospital accept insurance?</h5>
              <i class="faq-toggle bi bi-chevron-down fs-5" style="color: #d4af37;"></i>
            </div>
            <div class="faq-content px-4 pb-3" style="display: none;">
              <p class="mb-0" style="color: #555;">Yes, we work with most major insurance providers. Please bring your insurance card during your visit, or contact our billing office for more details.</p>
            </div>
          </div>

          <!-- Emergency Services -->
          <div class="card border-0 shadow-sm rounded-4 mb-3 faq-item" style="background: #f9f9fb;">
            <div class="card-header d-flex justify-content-between align-items-center p-4 faq-header" style="cursor: pointer; background: #ffffff; border-radius: 1rem;">
              <h5 class="mb-0 fw-semibold" style="color: #1a2a44;">What emergency services do you provide?</h5>
              <i class="faq-toggle bi bi-chevron-down fs-5" style="color: #d4af37;"></i>
            </div>
            <div class="faq-content px-4 pb-3" style="display: none;">
              <p class="mb-0" style="color: #555;">Our Emergency Department is open <strong>24/7</strong> with a dedicated team of doctors, nurses, and advanced facilities to handle critical cases immediately.</p>
            </div>
          </div>

          <!-- Medical Reports -->
          <div class="card border-0 shadow-sm rounded-4 mb-3 faq-item" style="background: #f9f9fb;">
            <div class="card-header d-flex justify-content-between align-items-center p-4 faq-header" style="cursor: pointer; background: #ffffff; border-radius: 1rem;">
              <h5 class="mb-0 fw-semibold" style="color: #1a2a44;">How can I get my medical reports?</h5>
              <i class="faq-toggle bi bi-chevron-down fs-5" style="color: #d4af37;"></i>
            </div>
            <div class="faq-content px-4 pb-3" style="display: none;">
              <p class="mb-0" style="color: #555;">Medical reports and lab results can be collected from the Medical Records Department. For convenience, digital copies are also available through our <strong>patient portal</strong>.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<style>
  .faq-header {
    transition: all 0.3s ease;
    border: 1px solid #e6e6e6;
  }
  .faq-header:hover {
    background: #fdfdfd;
    box-shadow: 0 3px 12px rgba(0,0,0,0.08);
  }
  .faq-toggle {
    transition: transform 0.3s ease, color 0.3s ease;
  }
  .faq-active .faq-toggle {
    transform: rotate(180deg);
    color: #1a2a44 !important;
  }
  .faq-content {
    animation: fadeIn 0.3s ease-in-out;
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");
    faqItems.forEach(item => {
      const header = item.querySelector(".faq-header");
      header.addEventListener("click", () => {
        faqItems.forEach(i => {
          if (i !== item) {
            i.classList.remove("faq-active");
            i.querySelector(".faq-content").style.display = "none";
          }
        });
        item.classList.toggle("faq-active");
        const content = item.querySelector(".faq-content");
        content.style.display = item.classList.contains("faq-active") ? "block" : "none";
      });
    });
  });
</script>




<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


@endsection
