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

                                <h6 class="card-title">Add Invoice</h6>

                                <form method="post" action="{{ route('store.invoices') }}" class="forms-sample">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Series </label>
                                                <input type="text" name="invoice_series" class="form-control @error('invoice_series') is-invalid @enderror">
                                                @error('invoice_series')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Number </label>
                                                <input type="text" name="invoice_number" class="form-control @error('invoice_number') is-invalid @enderror">
                                                @error('invoice_number')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Amount </label>
                                                <input type="text" name="invoice_amount" class="form-control @error('invoice_amount') is-invalid @enderror">
                                                @error('invoice_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Status </label>
                                                <select class="form-select @error('invoice_status') is-invalid @enderror" name="invoice_status" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select Status</option>
                                                    <option>offer</option>
                                                    <option>not paid</option>
                                                    <option>paid</option>
                                                    <option>overdue</option>
                                                </select>
                                                @error('invoice_status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Date Issued </label>
                                                <input type="date" name="invoice_issue_date" class="form-control @error('invoice_issue_date') is-invalid @enderror">
                                                @error('invoice_issue_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Due Date </label>
                                                <input type="date" name="invoice_due_date" class="form-control @error('invoice_due_date') is-invalid @enderror">
                                                @error('invoice_due_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Client Name </label>
                                                <input type="text" name="invoice_client" class="form-control @error('invoice_client') is-invalid @enderror">
                                                @error('invoice_client')
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
