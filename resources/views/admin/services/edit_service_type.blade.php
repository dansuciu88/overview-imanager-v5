@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title">Edit Service Type</h6>

                                <form method="post" action="{{ route('update.service-type') }}" class="forms-sample">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $types->id }}">

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Service Name </label>
                                        <input type="text" name="service_name" class="form-control @error('service_name') is-invalid @enderror" value="{{ $types->service_name }}">
                                        @error('service_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Type Icon </label>
{{--                                        <input type="text" name="service_unit" class="form-control @error('service_unit') is-invalid @enderror" value="{{ $types->service_unit }}">--}}
                                        <select class="form-select @error('service_unit') is-invalid @enderror" name="service_unit" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select unit</option>
                                            <option>unit</option>
                                            <option>hour</option>
                                            <option>sqm</option>
                                            <option>-</option>
                                        </select>
                                        @error('service_unit')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>

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
