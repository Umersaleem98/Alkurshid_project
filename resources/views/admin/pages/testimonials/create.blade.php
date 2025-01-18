<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>testimonials Management</title>
    @include('admin.layouts.head')
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <div id="toaster"></div>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <div class="page-wrapper">
            <!-- Header -->
            @include('admin.layouts.header')

            <div class="content-wrapper">
                <div class="content">
                    <!-- Create Service Form -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2>Add New testimonials</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="container mt-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h4 class="card-title">testimonials Details</h4>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ url('testimonials_store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf <!-- Include this for Laravel form submissions -->
                                            
                                                    <!-- Name Input -->
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input 
                                                            type="text" 
                                                            class="form-control" 
                                                            id="name" 
                                                            name="name" 
                                                            placeholder="Enter the name" 
                                                            required>
                                                    </div>
                                            
                                                    <!-- Designation Input -->
                                                    <div class="mb-3">
                                                        <label for="designation" class="form-label">Designation</label>
                                                        <input 
                                                            type="text" 
                                                            class="form-control" 
                                                            id="designation" 
                                                            name="designation" 
                                                            placeholder="Enter the designation (e.g., CEO & Founder)">
                                                    </div>
                                            
                                                    <!-- Image Upload -->
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Image</label>
                                                        <input 
                                                            type="file" 
                                                            class="form-control" 
                                                            id="image" 
                                                            name="image" 
                                                            accept="image/*">
                                                    </div>
                                            
                                                    <!-- Quote Input -->
                                                    <div class="mb-3">
                                                        <label for="quote" class="form-label">Testimonial</label>
                                                        <textarea 
                                                            class="form-control" 
                                                            id="quote" 
                                                            name="quote" 
                                                            rows="5" 
                                                            placeholder="Write the testimonial here..." 
                                                            required></textarea>
                                                    </div>
                                            
                                                    <!-- Submit Button -->
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Submit Testimonial</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
