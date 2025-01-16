<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <title>Doctor List</title>
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
                                    <h2>Doctor list</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productsTable" class="table table-hover table-product"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Specialization</th>
                                                    <th>Category</th>
                                                    <th>Profile Picture</th>
                                                    <th>Social Media</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($doctors as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->specialization }}</td>
                                                        <td>{{ $item->category->name ?? 'N/A' }}</td>
                                                        <!-- Assuming category relationship is set up -->
                                                        <td>
                                                            @if($item->profile_picture)
                                                                <img src="{{ asset('uploads/profile_pictures/' . $item->profile_picture) }}" alt="Profile Picture" width="50" height="50">
                                                            @else
                                                                No Image
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="{{ $item->facebook }}"
                                                                target="_blank">Facebook</a> |
                                                            <a href="{{ $item->instagram }}"
                                                                target="_blank">Instagram</a> |
                                                            <a href="{{ $item->twitter }}" target="_blank">Twitter</a>
                                                            |
                                                            <a href="{{ $item->linkedin }}"
                                                                target="_blank">LinkedIn</a> |
                                                            <a href="{{ $item->youtube }}"
                                                                target="_blank">YouTube</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('doctors_edit', $item->id) }}"
                                                                class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('doctors_delete', $item->id) }}"
                                                                class="btn btn-danger btn-sm">Delete</a>
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
