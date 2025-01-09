<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>List Doctor Category</title>
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
                    <!-- Create Doctor Category Form -->
                    <div class="row">
                        <div class="col-12">
                            @include('admin.layouts.alertfile.alert')
                            <div class="card">
                                <div class="card-header">
                                    <h4>List Doctor Category</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="productsTable" class="table table-hover table-product"
                                      style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Descriptions</th>
                                                        <th>Delete</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($doctorcategiries as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
    
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            
                                                            <td>
                                                                <a href="{{ url('delete', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
            </div>
        </div>
    </div>

    @include('admin.layouts.script')
</body>

</html>
