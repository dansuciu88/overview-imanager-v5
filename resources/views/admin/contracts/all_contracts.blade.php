@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.contracts') }}" class="btn btn-inverse-info"> Add Contract </a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Contracts</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Contract Name</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Project Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($contracts as $key => $item)
                            <tbody>
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->contract_name }}</td>
                                <td>{{ $item->contract_start }}</td>
                                <td>{{ $item->contract_end }}</td>
                                <td>{{ $item->contract_projectId }}</td>
                                <td>
                                    <a href="{{ route('edit.contract', $item->id) }}" class="btn btn-inverse-warning"> Edit </a>
                                    <a href="{{ route('delete.contract', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
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
