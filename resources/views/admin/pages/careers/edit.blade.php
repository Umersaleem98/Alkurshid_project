<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <title>Career List</title>
    @include('admin.layouts.head')
</head>


<body class="navbar-fixed sidebar-fixed" class="form-control" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>


    <div class="form-control" id="toaster"></div>
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
                                    <h2>Create Career </h2>
                                    @include('admin.layouts.alertfile.alert')
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form action="{{ url('careers_update', $careers->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="position_name">Position Name:</label>
                                                    <input type="text" class="form-control" value="{{ old('position_name', $careers->position_name) }}" id="position_name" name="position_name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="department">Department:</label>
                                                    <input type="text" class="form-control" value="{{ old('department', $careers->department) }}" id="department" name="department">
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="standard_level">Standard Level:</label>
                                                    <input type="text" class="form-control" value="{{ old('standard_level', $careers->standard_level) }}" id="standard_level" name="standard_level" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="application_deadline">Application Deadline:</label>
                                                    <input type="date" class="form-control" value="{{ old('application_deadline', $careers->application_deadline) }}" id="application_deadline" name="application_deadline">
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="job_type">Job Type:</label>
                                                    <input type="text" class="form-control" value="{{ old('job_type', $careers->job_type) }}" id="job_type" name="job_type">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="salary_range">Salary Range:</label>
                                                    <input type="text" class="form-control" value="{{ old('salary_range', $careers->salary_range) }}" id="salary_range" name="salary_range">
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" id="description" name="description">{{ old('description', $careers->description) }}</textarea>
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <label for="requirements">Requirements:</label>
                                                    <textarea class="form-control" id="requirements" name="requirements">{{ old('requirements', $careers->requirements) }}</textarea>
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="status">Status:</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="open" {{ old('status', $careers->status) == 'open' ? 'selected' : '' }}>Open</option>
                                                        <option value="closed" {{ old('status', $careers->status) == 'closed' ? 'selected' : '' }}>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-4">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
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
