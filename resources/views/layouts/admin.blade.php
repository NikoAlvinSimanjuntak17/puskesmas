<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
   
</head>
<body class="flex">

  <!-- SIDEBAR -->
  <aside class="sidebar w-64 p-6 flex flex-col">
    <h2 class="text-2xl font-bold mb-6">🏥 Admin</h2>
    <nav class="flex flex-col space-y-2">
      <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="fa fa-home mr-2"></i> Dashboard
      </a>
      <a href="{{ route('admin.appointments.index') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('appointments.*') ? 'active' : '' }}">
        <i class="fa fa-calendar mr-2"></i> Appointments
      </a>
      <a href="{{ route('admin.doctors.index') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('doctors.*') ? 'active' : '' }}">
        <i class="fa fa-user-md mr-2"></i> Doctors
      </a>
      <a href="{{ route('admin.departments.index') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('departments.*') ? 'active' : '' }}">
        <i class="fa fa-building mr-2"></i> Departments
      </a>
 
    <a href="/admin/emergency"><i class="fas fa-ambulance"></i> <span>Emergency</span></a>
    <a href="/admin/services"><i class="fas fa-concierge-bell"></i> <span>Service</span></a>
    <a href="/admin/accreditation"><i class="fas fa-certificate"></i> <span>Accreditation & Certification</span></a>

</div>
      <a href="{{ route('news.index') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('news.*') ? 'active' : '' }}">
        <i class="fa fa-newspaper mr-2"></i> News
      </a>
      <a href="{{ route('jobs.index') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('jobs.*') ? 'active' : '' }}">
        <i class="fa fa-briefcase mr-2"></i> Jobs
      </a>
      <a href="{{ route('admin.feedback.index') }}" class="px-4 py-2 rounded hover:bg-blue-600 {{ request()->routeIs('feedback.*') ? 'active' : '' }}">
        <i class="fa fa-comments mr-2"></i> Feedback
      </a>
          <a href="/logout"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
    </nav>
  </aside>

  <!-- MAIN CONTENT -->
  <div class="flex-1 flex flex-col">
    <!-- Topbar -->
   

    <!-- Content -->
    <main class="flex-1 p-6 bg-gray-100">
      @if(session('success'))
        <div class="p-3 bg-green-100 border border-green-400 text-green-800 rounded mb-4">
          {{ session('success') }}
        </div>
      @endif

      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white p-4 text-center text-gray-500 text-sm shadow-inner">
      © {{ date('Y') }} Alert Hospital CMS. All rights reserved.
    </footer>
  </div>

</body>
</html>
