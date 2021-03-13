@extends('master')

@section('page-title')
    Customers List
@endsection

@section('page-content')
    <div class="container">
        <h1 class="display-2 mt-4 mb-4">Customers List</h1>
        <a href="/customers/create" class="btn btn-success mb-4">New Customer</a>
        <table class="table table-bordered">
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
            @foreach($customers_list as $cust_data)
            <tr>
                <td class="text-center"><img style="width: 75px; border-radius: 50%;" src="{{ asset('storage/customers/' . $cust_data->image ) }}"></td>
                <td>{{ $cust_data->name }}</td>
                <td>{{ $cust_data->phone }}</td>
                <td>{{ $cust_data->address }}</td>
                <td style="width: 10%;">{{ $cust_data->email }}</td>
                <td>{{ $cust_data->city->city_name }}</td>
                <td>
                    <a href="/customers/{{ $cust_data->id }}" class="btn btn-secondary float-left mr-2">View</a>
                    <a href="/customers/{{ $cust_data->id }}/edit" class="btn btn-primary float-left mr-2">Edit</a>
                    <form action="/customers/{{ $cust_data->id }}" method="POST">
                        @method('delete')
                        <button type="submit" class="btn btn-danger float-left">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
