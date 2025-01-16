<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Doctor Edit</title>
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
                                    <h2>Update Doctor Profile</h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form action="{{ url('doctors_update', $doctors->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <!-- Two Inputs in a Single Row -->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Doctor's Name</label>
                                                    <input type="text" class="form-control" value="{{ $doctors->name }}" id="name" name="name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" value="{{ $doctors->email }}" id="email" name="email" required>
                                                </div>
                                            </div>
                                            
                                            <!-- Single Input -->
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" value="{{ $doctors->phone }}" id="phone" name="phone" required>
                                            </div>
                                            
                                            <!-- Single Input -->
                                            <div class="form-group">
                                                <label for="specialization">Specialization</label>
                                                <input type="text" class="form-control" value="{{ $doctors->specialization }}" id="specialization" name="specialization" required>
                                            </div>
                                            
                                            <!-- Profile Picture with Preview -->
                                            <div class="form-group">
                                                <label for="profile_picture">Profile Picture</label>
                                                <!-- Existing Image -->
                                                <div>
                                                    <img id="profile_picture_preview" 
                                                         src="{{ asset('uploads/profile_pictures/' . $doctors->profile_picture) }}" 
                                                         alt="Doctor's Profile Picture" 
                                                         style="width: 100px; height: 100px; object-fit: cover;">
                                                </div>
                                                <!-- File Input -->
                                                <input type="file" class="form-control" id="profile_picture" name="profile_picture" 
                                                       onchange="previewImage(event)">
                                            </div>
                                            
                                            <!-- Category Dropdown -->
                                            <div class="form-group">
                                                <label for="category_id">Category</label>
                                                <select class="form-control" id="category_id" name="category_id" required>
                                                    @foreach($doctorCategories as $category)
                                                        <option value="{{ $category->id }}" {{ $doctors->category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <!-- Social Media Links -->
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <input type="url" class="form-control" value="{{ $doctors->facebook }}" id="facebook" name="facebook">
                                            </div>
                                            <div class="form-group">
                                                <label for="instagram">Instagram</label>
                                                <input type="url" class="form-control" value="{{ $doctors->instagram }}" id="instagram" name="instagram">
                                            </div>
                                            <div class="form-group">
                                                <label for="twitter">Twitter</label>
                                                <input type="url" class="form-control" value="{{ $doctors->twitter }}" id="twitter" name="twitter">
                                            </div>
                                            <div class="form-group">
                                                <label for="linkedin">LinkedIn</label>
                                                <input type="url" class="form-control" value="{{ $doctors->linkedin }}" id="linkedin" name="linkedin">
                                            </div>
                                            <div class="form-group">
                                                <label for="youtube">YouTube</label>
                                                <input type="url" class="form-control" value="{{ $doctors->youtube }}" id="youtube" name="youtube">
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

    <!-- JavaScript for Image Preview -->
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function () {
                const preview = document.getElementById('profile_picture_preview');
                preview.src = reader.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>

</html>
