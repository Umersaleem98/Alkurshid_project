<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="d-none d-md-flex align-items-center">
          <i class="bi bi-clock me-1"></i> Monday - Saturday, 8AM to 10PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone me-1"></i> Call us now +1 5589 55488 55
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
          {{-- <img src="templates/assets/img/logo.png" alt=""> --}}
          <!-- Uncomment the line below if you also wish to use a text logo -->
          <h1 class="sitename">LOGO</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="{{ url('services') }}">Services</a></li>
            <li class="dropdown">
              <a href="#departments">
                <span>Departments</span> 
                <i class="bi bi-chevron-down toggle-dropdown"></i>
              </a>
              <ul>
                <li><a href="{{ url('departments/pathology') }}">Pathology</a></li>
                <li><a href="{{ url('departments/radiology') }}">Radiology</a></li>
                <li><a href="{{ url('departments/cardiology') }}">Cardiology</a></li>
              </ul>
            </li>
            
            <li><a href="{{ url('doctors') }}">Doctors</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" href="{{ url('appointment') }}">Make an Appointment</a>

      </div>

    </div>

  </header>
