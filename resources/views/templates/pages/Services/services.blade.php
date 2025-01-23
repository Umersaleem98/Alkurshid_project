<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>
    @include('templates.layouts.head')
</head>

<body>
    @include('templates.layouts.header')
    <main class="main">

        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Services</h2>
              <p>We offer a comprehensive range of diagnostic services, including but not limited to:</p>
            </div><!-- End Section Title -->
        
            <div class="container">
        
              <div class="row gy-4">
                @foreach ($services as $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="{{ asset('uploads/services/icons/'.$item->icon) }}" alt="Service Image" style="width: 50px; height: 50px; object-fit: cover;">
                            <!-- Use the dynamic icon from the database -->
                            <i class="{{ $item->icon }}"></i>
                        </div>
                        <a href="{{ $item->link }}" class="stretched-link">
                            <!-- Use the dynamic title from the database -->
                            <h3>{{ $item->title }}</h3>
                        </a>
                        <!-- Use the dynamic description from the database -->
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
            
               
        
              </div>
        
            </div>
        
          </section><!-- /Services Section -->
        
    </main>
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>

</html>
