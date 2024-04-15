@extends('admin.admin_dashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.service-type') }}" class="btn btn-inverse-info"> Add Service Type </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Service Types</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Service Name</th>
                                    <th>Service Unit</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach($types as $key => $item)
                                    <tbody>
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->service_name }}</td>
                                        <td>{{ $item->service_unit }}</td>
                                        <td>
                                            <a href="{{ route('edit.service-type', $item->id) }}" class="btn btn-inverse-warning"> Edit </a>
                                            <a href="{{ route('delete.service-type', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
