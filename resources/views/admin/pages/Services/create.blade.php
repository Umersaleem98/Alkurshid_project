<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Service Management</title>
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
                                    <h2>Add New Service</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="container mt-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h4 class="card-title">Service Details</h4>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ url('services_store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="icon" class="form-label">Icon</label>
                                                        <input type="file" class="form-control" id="icon" name="icon" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="images" class="form-label">Image</label>
                                                        <input type="file" class="form-control" id="images" name="images" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Service Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Service Title" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Service Description" required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="link" class="form-label">Service Title</label>
                                                        <input type="text" class="form-control" id="link" name="link" placeholder="Enter Service link" required>
                                                    </div>
                                                   
                                                    <div class="d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-success">Add Service</button>
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
