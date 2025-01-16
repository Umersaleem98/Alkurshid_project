<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Create Doctor Category</title>
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
                                    <h4>Create Doctor Category</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Form to create doctor category -->
                                    <form action="{{ url('categories_store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" name="name" id="category_name" class="form-control" placeholder="Enter category name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="category_description">Description</label>
                                            <textarea name="description" id="category_description" class="form-control" rows="4" placeholder="Enter category description"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Create Category</button>
                                    </form>
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
