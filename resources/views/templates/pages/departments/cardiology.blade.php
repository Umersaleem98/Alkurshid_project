<!DOCTYPE html>
<html lang="en">
<head>
    <title>cardiology</title>
    @include('templates.layouts.head')
</head>
<body>
    @include('templates.layouts.header')
    <div class="section-title-one mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="content">
                        <h2 class="fw-bold text-dark">Cardiology Services</h2>
                        <p>Our Cardiology Department is dedicated to providing advanced heart care with state-of-the-art technology and expert cardiologists for accurate diagnosis and treatment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-4">
            <!-- ECG -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\Electrocardiogram (ECG).webp') }}" alt="ECG" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Electrocardiogram (ECG)</h6>
                <p>Quick and painless test to detect heart abnormalities through electrical signals.</p>
            </div>
    
            <!-- Echocardiogram -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\Echocardiogram.webp') }}" alt="ECG" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Echocardiogram</h6>
                <p>Ultrasound imaging to assess heart function, valves, and blood flow.</p>
            </div>
    
            <!-- Stress Test -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\Cardiac Stress Test.jpg') }}" alt="ECG" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Cardiac Stress Test</h6>
                <p>Exercise or medication-induced test to monitor heart response under stress.</p>
            </div>
    
            <!-- Angiography -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Coronary Angiography.jpg') }}" alt="ECG" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Coronary Angiography</h6>
                <p>Imaging test to visualize blood flow in coronary arteries.</p>
            </div>
    
            <!-- Angioplasty -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Angioplasty & Stenting.jpg') }}" alt="ECG" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Angioplasty & Stenting</h6>
                <p>Minimally invasive procedure to open clogged arteries and improve blood flow.</p>
            </div>
    
            <!-- Pacemaker Implantation -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Pacemaker Implantation.png') }}" alt="ECG" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Pacemaker Implantation</h6>
                <p>Device implantation to regulate heart rhythms in arrhythmia patients.</p>
            </div>
        </div>
    </div>
    
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>
</html>