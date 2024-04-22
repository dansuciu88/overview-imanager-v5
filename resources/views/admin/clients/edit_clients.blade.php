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

                                <h6 class="card-title">Edit Client</h6>

                                <form method="post" action="{{ route('update.clients') }}" class="forms-sample">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $clients->id }}">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name </label>
                                                <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" value="{{ $clients->client_name }}">
                                                @error('client_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                                <input type="text" name="client_email" class="form-control @error('client_email') is-invalid @enderror" value="{{ $clients->client_email }}">
                                                @error('client_email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Telephone </label>
                                                <input type="text" name="client_telephone" class="form-control @error('client_telephone') is-invalid @enderror" value="{{ $clients->client_telephone }}">
                                                @error('client_telephone')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Address </label>
                                                <input type="text" name="client_address" class="form-control @error('client_address') is-invalid @enderror" value="{{ $clients->client_address }}">
                                                @error('client_address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Company Info</h6>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Company Name </label>
                                                        <input type="text" name="client_pj_name" class="form-control" value="{{ $clients->client_pj_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">VAT Number </label>
                                                        <input type="text" name="client_pj_cui" class="form-control" value="{{ $clients->client_pj_cui }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Registration Number </label>
                                                        <input type="text" name="client_pj_j" class="form-control" value="{{ $clients->client_pj_j }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Bank Name </label>
                                                        <input type="text" name="client_pj_bank" class="form-control" value="{{ $clients->client_pj_bank }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">IBAN </label>
                                                        <input type="text" name="client_pj_iban" class="form-control" value="{{ $clients->client_pj_iban }}">
                                                    </div>
                                                </div>
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
