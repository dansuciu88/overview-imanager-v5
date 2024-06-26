@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.invoices') }}" class="btn btn-inverse-info"> Add Invoice </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Invoices</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Series</th>
                                    <th>Number</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Client</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach($invoices as $key => $item)
                                    <tbody>
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->invoice_series }}</td>
                                        <td>{{ $item->invoice_number }}</td>
                                        <td>{{ $item->invoice_amount }}</td>
                                        <td>{{ $item->invoice_due_date }}</td>
                                        <td>{{ $item->invoice_status }}</td>
                                        <td>{{ $item->invoice_client }}</td>
                                        <td>
                                            <a href="#" class="btn btn-inverse-warning"> Edit </a>
                                            <a href="#" class="btn btn-inverse-danger" id="delete"> Delete </a>
                                            <a href="{{ route('view.invoices', $item->id) }}" class="btn btn-inverse-info" id="delete"> View </a>
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
