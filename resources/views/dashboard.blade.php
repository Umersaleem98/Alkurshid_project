<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('admin.layouts.head')
</head>
<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>
    <div id="toaster"></div>
    <div class="wrapper">
       @include('admin.layouts.sidebar')

        <div class="page-wrapper">

            <!-- Header -->
         @include('admin.layouts.header')
            <div class="content-wrapper">
                <div class="content">
                    <!-- Top Statistics -->
                    <div class="row g-3"> <!-- Bootstrap's gap utility (g-3) for consistent spacing -->
                        
                        <!-- Card for Total Doctors -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card text-center" style="background-color: salmon">
                                <div class="card-body">
                                    <h5 class="card-title">Total Doctors</h5>
                                    <h2 class="card-text">{{ $doctorCount }}</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Total Nurses -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card text-center" style="background-color: teal">
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Nurses</h5>
                                    <h2 class="card-text text-light">80</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Total Patients -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card text-center" style="background-color: orange">
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Patients</h5>
                                    <h2 class="card-text text-light">200</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Total Departments -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card text-center" style="background-color: purple">
                                <div class="card-body">
                                    <h5 class="card-title text-light">Total Departments</h5>
                                    <h2 class="card-text text-light">10</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.layouts.script')
</body>

</html>
