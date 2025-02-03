<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood bank</title>
    @include('templates.layouts.head')
</head>
<body>
    @include('templates.layouts.header')
    <div class="section-title-one mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="content">
                        <h2 class="fw-bold text-dark">Blood Bank Services</h2>
                        <p>Our Blood Bank is committed to ensuring a safe and reliable blood supply for patients in need. We provide high-quality blood storage, testing, and transfusion services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <!-- Blood Donation -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\BloodDonation.jpg') }}" alt="Blood Donation" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Blood Donation</h6>
                <p>Donate blood and save lives. Your donation can help patients in emergencies, surgeries, and chronic illnesses.</p>
            </div>
    
            <!-- Blood Storage -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\Safe Blood Storage.jpg') }}" alt="Blood Donation" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Safe Blood Storage</h6>
                <p>We use advanced refrigeration and monitoring systems to ensure the safety and quality of stored blood.</p>
            </div>
    
            <!-- Blood Testing -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\Blood Screening & Testing.jpg') }}" alt="Blood Donation" class="img-fluid rounded" style="height: 200px; width: auto;">
                
                <h6 class="fw-bold mt-3 text-dark">Blood Screening & Testing</h6>
                <p>All donated blood undergoes rigorous screening to prevent infections and ensure safety for recipients.</p>
            </div>
    
            <!-- Plasma Donation -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Plasma & Platelet Donation.jpg') }}" alt="Blood Donation" class="img-fluid rounded" style="height: 200px; width: auto;">
                
                <h6 class="fw-bold mt-3 text-dark">Plasma & Platelet Donation</h6>
                <p>Specialized donations to help patients with clotting disorders, burn injuries, and immune deficiencies.</p>
            </div>
    
            <!-- Emergency Blood Supply -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Emergency Blood Supply.jpg') }}" alt="Blood Donation" class="img-fluid rounded" style="height: 200px; width: auto;">
                
                <h6 class="fw-bold mt-3 text-dark">Emergency Blood Supply</h6>
                <p>24/7 availability of blood for trauma cases, surgeries, and life-saving treatments.</p>
            </div>
    
            <!-- Blood Grouping -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Blood Typing & Cross-Matching.jpg') }}" alt="Blood Donation" class="img-fluid rounded" style="height: 200px; width: auto;">
                
                <h6 class="fw-bold mt-3 text-dark">Blood Typing & Cross-Matching</h6>
                <p>Ensuring compatibility between donors and recipients for safe transfusions.</p>
            </div>
        </div>
    </div>
    
    
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>
</html>