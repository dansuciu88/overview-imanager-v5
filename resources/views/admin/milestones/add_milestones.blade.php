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

                                <h6 class="card-title">Add Milestone</h6>

                                <form method="post" action="{{ route('store.milestones') }}" class="forms-sample">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Milestone Name </label>
                                                <input type="text" name="milestone_name" class="form-control @error('milestone_name') is-invalid @enderror">
                                                @error('milestone_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Project Name </label>
                                                <input type="text" name="milestone_projectId" class="form-control @error('milestone_projectId') is-invalid @enderror">
                                                @error('milestone_projectId')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Start Date </label>
                                                <input type="date" name="milestone_start" class="form-control @error('milestone_start') is-invalid @enderror">
                                                @error('milestone_start')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Due Date </label>
                                                <input type="date" name="milestone_end" class="form-control @error('milestone_end') is-invalid @enderror">
                                                @error('milestone_end')
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
