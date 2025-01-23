<!DOCTYPE html>
<html lang="en">

<head>
    <title>About us</title>
    @include('templates.layouts.head')
</head>

<body>
    @include('templates.layouts.header')
    <main class="main">
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>Delivering Excellence in Diagnostic Services Since 1996</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <!-- Image Section -->
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="templates/assets/img/departments-5.jpg" class="img-fluid"
                            alt="About Al Khurshid Diagnostic Center">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Welcome to Al Khurshid Diagnostic Center</h3>
                        <p class="fst-italic">
                            Established in 1996, Al Khurshid Diagnostic Center has been a cornerstone in healthcare
                            diagnostics. For nearly three decades, we have consistently delivered accurate, reliable,
                            and timely diagnostic services, empowering healthcare professionals and supporting the
                            well-being of our community.
                        </p>

                        <h4>Why Choose Us?</h4>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Advanced technology and state-of-the-art facilities
                            </li>
                            <li><i class="bi bi-check2-all"></i> Highly skilled and compassionate professionals</li>
                            <li><i class="bi bi-check2-all"></i> A strong commitment to accuracy, reliability, and
                                excellence</li>
                            <li><i class="bi bi-check2-all"></i> Trusted by patients and healthcare providers since 1996
                            </li>
                        </ul>
                        <p>
                            At Al Khurshid Diagnostic Center, we prioritize your health and well-being, ensuring that
                            every patient receives the highest standard of care.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <section class="d-flex align-items-center py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image on the Right (First on small screens) -->
                    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="{{ asset('templates/assets/img/mission.jpg') }}" alt="Your Alt Text" class="img-fluid rounded">
                    </div>

                   
                    <!-- Text on the Left (Second on small screens) -->
                    <div class="col-lg-7 order-2 order-lg-1">
                        <h2 class="mb-3">Our Mission</h2>
                        <p class="mb-4">At Al Khurshid Diagnostic Center, our mission is to deliver high-quality
                            diagnostic services that empower healthcare professionals to make informed decisions and
                            help patients achieve optimal health outcomes. We strive for excellence through innovation,
                            compassion, and a commitment to precision.</p>
                        {{-- <a href="#" class="btn btn-primary">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </section>


        <section class="d-flex align-items-center py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image on the Left -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <img src="{{ asset('templates/assets/img/journey.jpg') }}" alt="Your Alt Text" class="img-fluid rounded">
                    </div>
                    

                    <!-- Text on the Right -->
                    <div class="col-lg-7">
                        <h2 class="mb-3">Our Journey</h2>
                        <p class="mb-4">Founded in 1996, Al Khurshid Diagnostic Center began with a vision to
                            revolutionize diagnostic services in the region. Over the years, we have grown into a
                            state-of-the-art facility equipped with advanced technology and staffed by highly qualified
                            professionals. Our unwavering dedication to quality and customer care has earned us the
                            trust of countless patients and healthcare providers.</p>
                        {{-- <a href="#" class="btn btn-primary">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </section>

    </main>
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>

</html>
