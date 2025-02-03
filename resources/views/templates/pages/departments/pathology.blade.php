<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.layouts.head')
</head>
<body>
    @include('templates.layouts.header')

    <!--====== Start Pathology Services Section ======-->
    <div class="section-title-one mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="content">
                        <h2 class="fw-bold text-dark">Pathology Services</h2>
                        <p class="text-dark">We provide comprehensive pathology services with state-of-the-art diagnostic technology to ensure accurate and timely results.</p>
                    </div>
                </div>
            </div>

            <!-- Pathology Services Grid -->
            <div class="row mt-4">
                <!-- Hematology -->
                <div class="col-lg-4 col-md-6 text-center" >
                    <img src="{{ asset('templates\assets\img\deppatments\Hematology.png') }}" alt="Hematology" class="img-fluid rounded" style="height: 200px;">
                    <h6 class="fw-bold mt-3 text-dark">Hematology</h6>
                    <p class="text-dark">Complete Blood Count (CBC), Blood Grouping, Clotting & Coagulation Tests.</p>
                </div>

                <!-- Biochemistry -->
                <div class="col-lg-4 col-md-6 text-center" >
                    <img src="{{ asset('templates\assets\img\deppatments\Biochemistry.png') }}" alt="Biochemistry" class="img-fluid rounded" style="height: 200px;">
                    <h6 class="fw-bold mt-3 text-dark">Biochemistry</h6>
                    <p class="text-dark">Blood Sugar, Liver & Kidney Function Tests, Lipid Profile, Cardiac Enzymes.</p>
                </div>

                <!-- Microbiology -->
                <div class="col-lg-4 col-md-6 text-center" >
                    <img src="{{ asset('templates\assets\img\deppatments\Microbiology.png') }}" alt="Microbiology" class="img-fluid rounded" style="height: 200px;">
                    <h6 class="fw-bold mt-3 text-dark">Microbiology</h6>
                    <p class="text-dark">Bacterial, Viral & Fungal Cultures, Urine & Stool Analysis, TB Testing.</p>
                </div>

                <!-- Histopathology -->
                <div class="col-lg-4 col-md-6 text-center  mt-4">
                    <img src="{{ asset('templates\assets\img\deppatments\Histopathology.png') }}" alt="Microbiology" class="img-fluid rounded" style="height: 200px;">
                    <h6 class="fw-bold mt-3 text-dark">Histopathology</h6>
                    <p class="text-dark">Tissue Biopsy, Pap Smear, FNAC, Tumor Marker Testing.</p>
                </div>

                <!-- Immunology -->
                <div class="col-lg-4 col-md-6 text-center  mt-4">
                    <img src="{{ asset('templates\assets\img\deppatments\Immunology.png') }}" alt="Microbiology" class="img-fluid rounded" style="height: 200px;">
                    <h6 class="fw-bold mt-3 text-dark">Immunology</h6>
                    <p class="text-dark">Allergy Testing, Hepatitis A/B/C, Autoimmune Disease Testing, HIV/STD Screening.</p>
                </div>

                <!-- Molecular Diagnostics -->
                <div class="col-lg-4 col-md-6 text-center  mt-4">
                    <img src="{{ asset('templates\assets\img\deppatments\Molecular.jpg') }}" alt="Microbiology" class="img-fluid rounded" style="height: 200px;">
                    <h6 class="fw-bold mt-3 text-dark">Molecular Diagnostics</h6>
                    <p class="text-dark">DNA/RNA Testing, Genetic Disorder Screening, Cancer Markers.</p>
                </div>
            </div>
        </div>
    </div>
    <!--====== Pathology Services Section Ends ======-->

    @include('templates.layouts.footer')
    @include('templates.layouts.js')
</body>
</html>
