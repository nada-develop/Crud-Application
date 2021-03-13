@extends('master')

@section('page-title')
    Customers Trash
@endsection

@section('page-content')
    <div class="container">
        <h1 class="display-2 text-danger mt-4 mb-4">Customers Trash</h1>
        <a href="/customers" class="btn btn-secondary mb-4">Back to Customers</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
            @foreach($trash_list as $cust_data)
            <tr>
                <td>{{ $cust_data->name }}</td>
                <td>{{ $cust_data->phone }}</td>
                <td>{{ $cust_data->address }}</td>
                <td>{{ $cust_data->email }}</td>
                <td>{{ $cust_data->city->city_name }}</td>
                <td>
                    <a href="/customers/trash/{{ $cust_data->id }}/restore" class="btn btn-success mr-2">Restore</a>
                    <a href="/customers/trash/{{ $cust_data->id }}/deleteforever" class="btn btn-danger">Delete Forever</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
