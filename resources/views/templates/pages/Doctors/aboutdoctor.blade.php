<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Doctor</title>
    @include('templates.layouts.head')
</head>

<body>
    @include('templates.layouts.header')

    <main class="main">
        <section id="about-doctor" class="doctor-profile section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ $doctor->name }}</h2>
                <p>Learn more about {{ $doctor->name }} and their expertise.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">
                    <!-- Doctor Profile -->
                    <div class="col-md-4">
                        <div class="profile-picture">
                            @if($doctor->profile_picture)
                                <img src="{{ asset('uploads/profile_pictures/' . $doctor->profile_picture) }}" class="img-fluid" alt="{{ $doctor->name }}">
                            @else
                                <img src="{{ asset('templates/assets/img/doctors/default.jpg') }}" class="img-fluid" alt="Default Image">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="doctor-details">
                            <h3>{{ $doctor->name }}</h3>
                            <p><strong>Specialization:</strong> {{ $doctor->specialization }}</p>
                            <p><strong>Email:</strong> {{ $doctor->email }}</p>
                            <p><strong>Phone:</strong> {{ $doctor->phone }}</p>
                            <p><strong>Category:</strong> {{ $doctor->category->name ?? 'Not Assigned' }}</p>
                            <p>{{ $doctor->category->description ?? '' }}</p>

                            <div class="social-media">
                                <strong>Connect:</strong>
                                @if($doctor->facebook)
                                    <a href="{{ $doctor->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                                @endif
                                @if($doctor->instagram)
                                    <a href="{{ $doctor->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                                @endif
                                @if($doctor->twitter)
                                    <a href="{{ $doctor->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                                @endif
                                @if($doctor->linkedin)
                                    <a href="{{ $doctor->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                @endif
                                @if($doctor->youtube)
                                    <a href="{{ $doctor->youtube }}" target="_blank"><i class="bi bi-youtube"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>

</html>
