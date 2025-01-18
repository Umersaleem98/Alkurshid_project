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
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>Testimonial</th>
                                                    <th>Profile Picture</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($testimonials as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td> <!-- Serial number -->
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->designation }}</td>
                                                    <td>{{ Str::limit($item->quote, 50) }}</td> <!-- Limit quote length -->
                                                    <td>
                                                        @if ($item->image)
                                                            <img src="{{ asset('uploads/testimonial/' . $item->image) }}" alt="Profile Picture" width="50" height="50">
                                                        @else
                                                            N/A
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <!-- Delete Button -->
                                                        <a href="{{ url('testimonials_edit', $item->id) }}" class="btn btn-sm btn-info">
                                                            Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <!-- Delete Button -->
                                                        <a href="{{ url('testimonials_delete', $item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this testimonial?')">
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
