<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <title>Service List</title>
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
                                    <h2>Service List</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productsTable" class="table table-hover table-product"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Icon</th>
                                                    <th>Images</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    {{-- <th>Edit</th> --}}
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($services as $item)
                                               <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                
                                                <td>
                                                    <img src="{{ asset('uploads/services/icons/'.$item->icon) }}" alt="Service Image" style="width: 50px; height: 50px; object-fit: cover;">
                                                </td>
                                                <!-- Displaying Image -->
                                                <td>
                                                    <img src="{{ asset('uploads/services/images/'.$item->images) }}" alt="Service Image" style="width: 50px; height: 50px; object-fit: cover;">
                                                </td>

                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->description }}</td>
                                                {{-- <td>
                                                    <a href="{{ url('services_edit', $item->id) }}" class="btn btn-sm btn-primary">
                                                        Edit
                                                    </a>
                                                   
                                                </td> --}}
                                                <td>
                                                    <a href="{{ url('services_delete', $item->id) }}" class="btn btn-sm btn-danger">
                                                        Delete
                                                    </a>
                                                   
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

</body>

</html>
