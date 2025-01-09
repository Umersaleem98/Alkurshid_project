<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <title>Aappointment List</title>
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
                                    <h2>Clients Aappointment list</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productsTable" class="table table-hover table-product"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Date</th>
                                                    <th>Department</th>
                                                    <th>Doctor</th>
                                                    <th>Message</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($aappointment as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->date }}</td>
                                                        <td>{{ $item->department }}</td>
                                                        <td>{{ $item->doctor }}</td>
                                                        <td>{{ $item->message }}</td>
                                                        <td>
                                                           
                                                            
                                                            <a href="{{ url('appointments.adestroy', $item->id) }}"
                                                                class="btn btn-sm btn-danger">Delete</a>
                                                            
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
