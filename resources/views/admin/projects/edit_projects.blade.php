@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title">Edit Project</h6>

                                <form method="post" action="{{ route('store.projects') }}" class="forms-sample">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $projects->id }}">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Project Name </label>
                                                <input type="text" name="project_name" class="form-control @error('project_name') is-invalid @enderror" value="{{ $projects->project_name }}">
                                                @error('project_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Client </label>
                                                <input type="text" name="project_client" class="form-control @error('project_client') is-invalid @enderror" value="{{ $projects->project_client }}">
                                                @error('project_client')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Project Number </label>
                                                <input type="text" name="project_number" class="form-control" value="{{ $projects->project_number }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Budget </label>
                                                <input type="text" name="project_budget" class="form-control" value="{{ $projects->project_budget }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Project Address </label>
                                                <input type="text" name="project_address" class="form-control @error('project_address') is-invalid @enderror" value="{{ $projects->project_address }}">
                                                @error('project_address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Project Description </label>
                                                <input type="text" name="project_description" class="form-control @error('project_description') is-invalid @enderror" value="{{ $projects->project_description }}">
                                                @error('project_description')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Status </label>
                                                <select class="form-select @error('project_status') is-invalid @enderror" name="project_status" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select Status</option>
                                                    <option>offer</option>
                                                    <option>active</option>
                                                    <option>rejected</option>
                                                    <option>completed</option>
                                                </select>
                                                @error('project_status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Start Date </label>
                                                <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ $projects->start_date }}">
                                                @error('start_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">End Date </label>
                                                <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ $projects->end_date }}">
                                                @error('end_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>





                                    <button type="submit" class="btn btn-primary me-2" style="margin-top: 20px;">Save Changes</button>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- middle wrapper end -->
        </div>
    </div>



@endsection
