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

                                <h6 class="card-title">Edit Document</h6>

                                <form method="post" action="{{ route('update.documents') }}" class="forms-sample">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $documents->id }}">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Document Name </label>
                                                <input type="text" name="document_name" class="form-control @error('document_name') is-invalid @enderror" value="{{ $documents->document_name }}">
                                                @error('document_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Project Name </label>
                                                <input type="text" name="document_projectId" class="form-control @error('document_projectId') is-invalid @enderror" value="{{ $documents->document_projectId }}">
                                                @error('document_projectId')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Start Date </label>
                                                <input type="date" name="document_start" class="form-control @error('document_start') is-invalid @enderror" value="{{ $documents->document_start }}">
                                                @error('document_start')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Due Date </label>
                                                <input type="date" name="document_end" class="form-control @error('document_end') is-invalid @enderror" value="{{ $documents->document_end }}">
                                                @error('document_end')
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
