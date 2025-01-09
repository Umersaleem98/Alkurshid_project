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
                                    <h2>Create Doctor </h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form action="{{ url('doctors.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label for="name">Doctor's Name</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" required>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="specialization">Specialization</label>
                                                <input type="text" class="form-control" id="specialization" name="specialization" required>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="profile_picture">Profile Picture</label>
                                                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="category_id">Category</label>
                                                <select class="form-control" id="category_id" name="category_id" required>
                                                    @foreach($doctorCategories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <input type="url" class="form-control" id="facebook" name="facebook">
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="instagram">Instagram</label>
                                                <input type="url" class="form-control" id="instagram" name="instagram">
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="twitter">Twitter</label>
                                                <input type="url" class="form-control" id="twitter" name="twitter">
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="linkedin">LinkedIn</label>
                                                <input type="url" class="form-control" id="linkedin" name="linkedin">
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="youtube">YouTube</label>
                                                <input type="url" class="form-control" id="youtube" name="youtube">
                                            </div>
                                    
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
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
