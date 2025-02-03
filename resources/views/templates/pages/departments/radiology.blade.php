<!DOCTYPE html>
<html lang="en">
<head>
    <title>radiology</title>
    @include('templates.layouts.head')
</head>
<body>
    @include('templates.layouts.header')
    <div class="section-title-one mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="content">
                        <h2 class="fw-bold text-dark">Radiology Services</h2>
                        <p>Our Radiology Department offers advanced imaging solutions to aid in accurate diagnosis and treatment planning, ensuring the best healthcare for our patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <!-- X-Ray -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\X-Ray.jpg') }}" alt="X-Ray" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">X-Ray</h6>
                <p>Standard and digital X-ray imaging for bones, lungs, and soft tissues.</p>
            </div>
    
            <!-- Ultrasound -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\Ultrasound.jpg') }}" alt="X-Ray" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Ultrasound</h6>
                <p>High-frequency sound waves for organ imaging, pregnancy scans, and soft tissue assessment.</p>
            </div>
    
            <!-- MRI -->
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('templates\assets\img\deppatments\MRI.jpg') }}" alt="X-Ray" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">MRI</h6>
                <p>Detailed 3D imaging of organs, joints, and soft tissues using magnetic fields.</p>
            </div>
    
            <!-- CT Scan -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\CT Scan.jpg') }}" alt="X-Ray" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">CT Scan</h6>
                <p>Advanced cross-sectional imaging for diagnosing internal injuries and diseases.</p>
            </div>
    
            <!-- Mammography -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Mammography.jpg') }}" alt="X-Ray" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Mammography</h6>
                <p>Early detection of breast cancer with low-dose X-ray imaging.</p>
            </div>
    
            <!-- Interventional Radiology -->
            <div class="col-lg-4 col-md-6 text-center mt-4">
                <img src="{{ asset('templates\assets\img\deppatments\Interventional Radiology.jpg') }}" alt="X-Ray" class="img-fluid rounded" style="height: 200px; width: auto;">
                <h6 class="fw-bold mt-3 text-dark">Interventional Radiology</h6>
                <p>Minimally invasive procedures guided by imaging for precise treatment.</p>
            </div>
        </div>
    </div>
    
    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>
</html>