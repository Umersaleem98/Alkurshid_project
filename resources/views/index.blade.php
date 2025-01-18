<!DOCTYPE html>
<html lang="en">

<head>
  
  
  @include('templates.layouts.head')
  
</head>

<body class="index-page">

@include('templates.layouts.header')
  <main class="main">

    <!-- Hero Section -->
   @include('templates.layouts.hero')

    <!-- Featured Services Section -->
   @include('templates.layouts.Feature-services')
    <!-- Call To Action Section -->
 @include('templates.layouts.call-to-action')
    <!-- About Section -->
  @include('templates.layouts.about')
    <!-- Stats Section -->
   @include('templates.layouts.stats')
    <!-- Features Section -->
   @include('templates.layouts.featurs')
    <!-- Services Section -->
   @include('templates.layouts.services')
    <!-- Appointment Section -->
 @include('templates.layouts.appointment')
    <!-- Tabs Section -->
@include('templates.layouts.tabss')
    <!-- Testimonials Section -->
   @include('templates.layouts.testimonials')
    <!-- Doctors Section -->
   @include('templates.layouts.doctors')

    <!-- Gallery Section -->
  @include('templates.layouts.gallary')
    <!-- Pricing Section -->
  {{-- @include('templates.layouts.pricing') --}}
    <!-- Faq Section -->
   {{-- @include('templates.layouts.faq') --}}

    {{-- <!-- Contact Section -->
 @include('templates.layouts.contact') --}}

  </main>

 @include('templates.layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('templates.layouts.js')
  
</body>

</html>