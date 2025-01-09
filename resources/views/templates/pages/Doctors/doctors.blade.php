<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctors</title>
    @include('templates.layouts.head')
</head>

<body>
    @include('templates.layouts.header')
    <main class="main">

        <section id="doctors" class="doctors section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Doctors</h2>
                <p>Meet our professional team of doctors.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @foreach($doctors as $doctor)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    @if($doctor->profile_picture)
                                        <img src="{{ asset('uploads/profile_pictures/' . $doctor->profile_picture) }}" class="img-fluid" alt="{{ $doctor->name }}">
                                    @else
                                        <img src="{{ asset('templates/assets/img/doctors/default.jpg') }}" class="img-fluid" alt="Default">
                                    @endif
                                    <div class="social">
                                        @if($doctor->twitter)
                                            <a href="{{ $doctor->twitter }}"><i class="bi bi-twitter"></i></a>
                                        @endif
                                        @if($doctor->facebook)
                                            <a href="{{ $doctor->facebook }}"><i class="bi bi-facebook"></i></a>
                                        @endif
                                        @if($doctor->instagram)
                                            <a href="{{ $doctor->instagram }}"><i class="bi bi-instagram"></i></a>
                                        @endif
                                        @if($doctor->linkedin)
                                            <a href="{{ $doctor->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="member-info">
                                   <a href="{{ url("about-doctor", $doctor->id) }}"> <h4>{{ $doctor->name }}</h4></a>
                                    <span>{{ $doctor->specialization }}</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>

        </section><!-- /Doctors Section -->

    </main>
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>

</html>
