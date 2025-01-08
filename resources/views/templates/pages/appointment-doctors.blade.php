<!DOCTYPE html>
<html lang="en">

<head>
  
  
  @include('templates.layouts.head')
  
</head>

<body class="index-page">

@include('templates.layouts.header')
  <main class="main mb-5">

    @include('templates.layouts.appointment')

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