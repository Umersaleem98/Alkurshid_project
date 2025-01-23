<style>
   <style>
        /* Custom Pagination Design */
        .custom-pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .custom-pagination li {
            margin: 0 5px;
        }

        .custom-pagination a,
        .custom-pagination span {
            display: inline-block;
            padding: 8px 16px;
            color: #fff;
            background-color: #0359DB;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .custom-pagination a:hover {
            background-color: #0359DB;
        }

        .custom-pagination .active span {
            background-color: #0359DB;
            pointer-events: none;
        }

        .custom-pagination .disabled span {
            background-color: #e0e0e0;
            color: #9e9e9e;
            pointer-events: none;
        }
    </style>

</style>

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
                                <img src="{{ asset('uploads/profile_pictures/' . $doctor->profile_picture) }}" class="img-fluid" alt="{{ $doctor->name }}" style="height: 232px; width: 100%;">
                            @else
                                <img src="{{ asset('templates/assets/img/doctors/default.jpg') }}" class="img-fluid" alt="Default" style="height: 300px; width: 100%;">
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
                            <span class="text-dark">{{ $doctor->specialization }}</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            @endforeach
        </div>
  
        <!-- Pagination Bar -->
        <div class="pagination justify-content-center mt-4">
            <ul class="custom-pagination">
                {{ $doctors->onEachSide(1)->links('pagination::bootstrap-4') }}
            </ul>
        </div>
        <!-- End Pagination Bar -->
  
    </div>
  
  </section><!-- /Doctors Section -->
  