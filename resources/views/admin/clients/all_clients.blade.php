@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.clients') }}" class="btn btn-inverse-info"> Add Client </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Clients</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                    <th>Company</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach($clients as $key => $item)
                                    <tbody>
                                    <tr>
{{--                                        <td>{{ $key+1 }}</td>--}}
                                        <td>{{ $item->client_name }}</td>
                                        <td>{{ $item->client_email }}</td>
                                        <td>{{ $item->client_telephone }}</td>
                                        <td>{{ $item->client_address }}</td>
                                        <td>{{ $item->client_pj_name }}</td>
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
