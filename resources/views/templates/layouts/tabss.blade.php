<section id="tabs" class="tabs section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Departments</h2>
        <p>Explore the various medical departments and their specialized services.</p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Pathology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Radiology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Cardiology</a>
                    </li>
                    <!-- New Blood Bank Tab -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Blood Bank</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    <!-- Pathology Content -->
                    <div class="tab-pane active show" id="tabs-tab-1">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Pathology</h3>
                                <p class="fst-italic">Dedicated to diagnosing diseases through laboratory tests and
                                    advanced technologies.</p>
                                <p>Our pathology department offers a wide range of diagnostic services, including blood
                                    tests, biopsies, and cytology. With state-of-the-art equipment and experienced
                                    pathologists, we ensure accurate results for effective treatment plans.</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ asset('templates\assets\img\deppatments\Hematology.png') }}" alt="Pathology Department"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Radiology Content -->
                    <div class="tab-pane" id="tabs-tab-2">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Radiology</h3>
                                <p class="fst-italic">Specialists in imaging techniques to diagnose and treat medical
                                    conditions.</p>
                                <p>Our radiology department provides cutting-edge imaging services, including X-rays,
                                    MRIs, CT scans, and ultrasounds. Our skilled radiologists work closely with other
                                    departments to offer precise imaging support for patient care.</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ asset('templates\assets\img\deppatments\X-Ray.jpg') }}" alt="Radiology Department"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Cardiology Content -->
                    <div class="tab-pane" id="tabs-tab-3">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Cardiology</h3>
                                <p class="fst-italic">Focused on heart health and cardiovascular care.</p>
                                <p>Our cardiology department is equipped with advanced diagnostic and therapeutic
                                    technologies. From routine check-ups to complex heart procedures, our cardiologists
                                    ensure personalized care for every patient.</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ asset('templates\assets\img\deppatments\Coronary Angiography.jpg') }}" alt="Cardiology Department"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Blood Bank Content (New) -->
                    <div class="tab-pane" id="tabs-tab-4">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Blood Bank</h3>
                                <p class="fst-italic">Ensuring the availability of safe and quality blood for patients
                                    in need.</p>
                                <p>Our blood bank is committed to providing safe, screened, and compatible blood for
                                    patients. We follow strict protocols for blood donation, testing, and storage to
                                    ensure the highest standards of quality and safety.</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ asset('templates\assets\img\deppatments\BloodDonation.jpg') }}" alt="Blood Bank Department"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
