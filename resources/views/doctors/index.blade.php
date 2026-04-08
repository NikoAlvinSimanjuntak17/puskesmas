@extends('layouts.app')  

@section('content')

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<body class="bg-gray-50 font-sans">

  <!-- 🔍 Search / Filter Section -->
  <div class="container mx-auto px-6 lg:px-12 mt-12">
    <form id="doctorSearchForm" class="flex flex-col md:flex-row gap-4 items-center justify-center w-full max-w-4xl mx-auto">
      <!-- Specialty Filter -->
      <select id="specialityFilter" 
        class="w-full md:flex-1 border-gray-300 rounded-xl shadow-md p-3 focus:ring-2 focus:ring-blue-600 bg-white">
        <option value="">All Specialties</option>
        <option value="Cardiologist">Cardiologist</option>
        <option value="Neurologist">Neurologist</option>
        <option value="Pediatrician">Pediatrician</option>
        <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
        <option value="Radiologist">Radiologist</option>
        <option value="Emergency Specialist">Emergency Specialist</option>
      </select>

      <!-- Search Name -->
      <input type="text" 
        id="nameSearch" 
        placeholder="Search doctor by name..." 
        class="w-full md:flex-1 border-gray-300 rounded-xl shadow-md p-3 focus:ring-2 focus:ring-blue-600 bg-white" />

      <!-- Search Button -->
      <button type="button" onclick="filterDoctors()" 
        class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-lg transition flex items-center gap-2">
        🔍 Search
      </button>
    </form>
  </div>

  <!-- Doctors Section -->
  <section id="doctors" class="py-20 bg-gradient-to-r from-gray-50 to-gray-100">
    <div class="container mx-auto px-6 lg:px-12 text-center mb-12">
      <h2 class="text-5xl font-extrabold text-gray-800 mb-4">Meet Our Doctors</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Highly skilled specialists dedicated to providing the best medical care for you and your family.</p>
    </div>

    @php
      $doctors = [
        ['name' => 'Dr. Sarah Johnson', 'specialty' => 'Cardiologist', 'desc' => 'Expert in heart disease prevention and advanced cardiology care.', 'photo' => 'images/fem.jpg'],
        ['name' => 'Dr. James Smith', 'specialty' => 'Neurologist', 'desc' => 'Specialist in brain and nervous system disorders with 15 years experience.', 'photo' => 'images/appointment-image.jpg'],
        ['name' => 'Dr. Emily Davis', 'specialty' => 'Pediatrician', 'desc' => 'Compassionate care for children from birth through adolescence.', 'photo' => 'images/fem1.jpg'],
        ['name' => 'Dr. Michael Lee', 'specialty' => 'Orthopedic Surgeon', 'desc' => 'Specialist in bones, joints, and sports injuries with surgical expertise.', 'photo' => 'images/male.jpg'],
        ['name' => 'Dr. Sophia Martinez', 'specialty' => 'Radiologist', 'desc' => 'Expert in diagnostic imaging, X-rays, CT scans, and MRI interpretation.', 'photo' => 'images/fem2.jpg'],
        ['name' => 'Dr. David Wilson', 'specialty' => 'Emergency Specialist', 'desc' => 'Providing immediate critical care for urgent medical emergencies.', 'photo' => 'images/mal.jpg']
      ];
    @endphp

    <!-- Doctors Grid -->
    <div id="doctorGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto px-6">
      @foreach($doctors as $d)
      <div class="doctor-card relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-2"
           data-name="{{ strtolower($d['name']) }}" 
           data-specialty="{{ strtolower($d['specialty']) }}">
        
        <!-- Doctor Image -->
        <img src="{{ asset($d['photo']) }}" alt="{{ $d['name'] }}" 
             class="w-full h-96 object-cover group-hover:scale-110 transition-transform duration-1000 delay-100">
        
        <!-- Overlay Info Always Visible -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent 
                    flex flex-col justify-end p-6 text-left opacity-100 
                    transition-opacity duration-1000 delay-[600ms]">
          <h3 class="text-2xl font-bold text-white mb-1 drop-shadow-lg">{{ $d['name'] }}</h3>
          <p class="text-blue-400 font-semibold mb-2">{{ $d['specialty'] }}</p>
          <p class="text-gray-200 text-sm mb-4 leading-relaxed">{{ $d['desc'] }}</p>
          <button onclick="openDoctorModal('{{ $d['name'] }}', '{{ $d['specialty'] }}', '{{ $d['desc'] }}', '{{ asset($d['photo']) }}')" 
            class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-lg transition duration-500 delay-[800ms]">
            View Profile
          </button>
        </div>
      </div>
      @endforeach
    </div>

    <!-- No Results Message -->
    <p id="noResultsMessage" class="hidden text-center text-gray-600 text-lg mt-8 animate-fade-in">
      🚫 No doctors found matching your search.
    </p>
  </section>

  <!-- Doctor Profile Modal -->
  <div id="doctorModal" class="fixed inset-0 bg-black/60 hidden justify-center items-center z-50 backdrop-blur-sm">
    <div class="bg-white rounded-2xl shadow-2xl w-[90%] max-w-3xl relative p-8 animate-zoom-in border border-gray-200">
      <!-- Close Button -->
      <button onclick="closeDoctorModal()" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 text-2xl">&times;</button>

      <div class="flex flex-col md:flex-row gap-8">
        <!-- Doctor Photo -->
        <div class="flex-shrink-0 relative group">
          <img id="modalPhoto" src="" alt="Doctor" 
               class="w-48 h-48 rounded-xl object-cover shadow-lg transform transition duration-500 group-hover:scale-110 group-hover:rotate-2">
          <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 rounded-xl transition"></div>
        </div>

        <!-- Info -->
        <div>
          <h3 id="modalName" class="text-3xl font-bold text-gray-800"></h3>
          <p id="modalPosition" class="text-blue-600 font-semibold mb-3"></p>
          <p id="modalDescription" class="text-gray-600 mb-6"></p>
          <div class="flex gap-4 text-gray-500">
            <a href="#" class="hover:text-blue-500"><i class="bi bi-twitter-x text-2xl"></i></a>
            <a href="#" class="hover:text-blue-600"><i class="bi bi-facebook text-2xl"></i></a>
            <a href="#" class="hover:text-pink-500"><i class="bi bi-instagram text-2xl"></i></a>
            <a href="#" class="hover:text-blue-700"><i class="bi bi-linkedin text-2xl"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal + Search Script -->
  <script>
    function openDoctorModal(name, position, description, photo) {
      document.getElementById("modalName").innerText = name;
      document.getElementById("modalPosition").innerText = position;
      document.getElementById("modalDescription").innerText = description;
      document.getElementById("modalPhoto").src = photo;

      document.getElementById("doctorModal").classList.remove("hidden");
      document.getElementById("doctorModal").classList.add("flex");
    }

    function closeDoctorModal() {
      document.getElementById("doctorModal").classList.add("hidden");
      document.getElementById("doctorModal").classList.remove("flex");
    }

    // 🔍 Filter Doctors
    function filterDoctors() {
      let nameInput = document.getElementById("nameSearch").value.toLowerCase();
      let specialtyInput = document.getElementById("specialityFilter").value.toLowerCase();
      
      let cards = document.querySelectorAll(".doctor-card");
      let noResults = document.getElementById("noResultsMessage");
      let visibleCount = 0;

      cards.forEach(card => {
        let name = card.getAttribute("data-name");
        let specialty = card.getAttribute("data-specialty");

        if ((name.includes(nameInput)) && 
            (specialtyInput === "" || specialty.includes(specialtyInput))) {
          card.style.display = "block";
          visibleCount++;
        } else {
          card.style.display = "none";
        }
      });

      if (visibleCount === 0) {
        noResults.classList.remove("hidden");
      } else {
        noResults.classList.add("hidden");
      }
    }
  </script>

  <!-- Animations -->
  <style>
    .animate-zoom-in {
      animation: zoomIn 0.4s ease-in-out;
    }
    @keyframes zoomIn {
      from { opacity: 0; transform: scale(0.8); }
      to { opacity: 1; transform: scale(1); }
    }

    .animate-fade-in {
      animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>

@endsection 