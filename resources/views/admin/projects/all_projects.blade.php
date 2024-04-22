@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.projects') }}" class="btn btn-inverse-info"> Add Project </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Projects</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project #</th>
                                    <th>Name</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Budget</th>
                                    <th>Client</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach($projects as $key => $item)
                                    <tbody>
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->project_number }}</td>
                                        <td>{{ $item->project_name }}</td>
                                        <td>{{ $item->end_date }}</td>
                                        <td>{{ $item->project_status }}</td>
                                        <td>{{ $item->project_budget }}</td>
                                        <td>{{ $item->project_client }}</td>
                                        <td>
                                            <a href="{{ route('edit.projects', $item->id) }}" class="btn btn-inverse-warning"> Edit </a>
                                            <a href="{{ route('delete.projects', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
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
