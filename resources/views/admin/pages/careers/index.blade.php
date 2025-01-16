<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <title>Career List</title>
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
                    <!-- Table Product -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h2>Career list</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productsTable" class="table table-hover table-product"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Position Name</th>
                                                    <th>Department</th>
                                                    <th>Standard Level</th>
                                                    <th>Application Deadline</th>
                                                    <th>Job Type</th>
                                                    <th>Salary Range</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($careers as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->position_name }}</td>
                                                        <td>{{ $item->department }}</td>
                                                        <td>{{ $item->standard_level }}</td>
                                                        <td>{{ $item->application_deadline }}</td>
                                                        <td>{{ $item->job_type }}</td>
                                                        <td>{{ $item->salary_range }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>{{ ucfirst($item->status) }}</td>
                                                        <td>
                                                            <a href="{{ url('careers_edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                           
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('careers_delete', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <!-- Footer -->


        </div>
    </div>

    @include('admin.layouts.script')

    <!--  -->


</body>

</html>
