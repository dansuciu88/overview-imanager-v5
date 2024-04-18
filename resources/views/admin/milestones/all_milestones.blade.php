@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.milestones') }}" class="btn btn-inverse-info"> Add Milestone </a>
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
                                    <th>Milestone Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Project Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach($milestones as $key => $item)
                                    <tbody>
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->milestone_name }}</td>
                                        <td>{{ $item->milestone_start }}</td>
                                        <td>{{ $item->milestone_end }}</td>
                                        <td>{{ $item->milestone_projectId }}</td>
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
