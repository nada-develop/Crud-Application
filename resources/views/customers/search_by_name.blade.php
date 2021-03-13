@extends('master')

@section('page-title')
    Search Customers By Name
@endsection



@section('page-content')
    <div class="container">
        <h1 class="display-3 mt-4 mb-4">Search By Name</h1>
        <form action="/customers/search_by_name" method="POST" class="mt-4 mb-4">
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" name="query" value="{{ request('query') != "" ? request('query') : "" }}">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-info col-3">Search</button>
                </div>
            </div>
        </form>
        @if(isset($customers[0]))
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>City</th>
            </tr>
            @foreach($customers as $cust)
            <tr>
                <td>{{ $cust->name }}</td>
                <td>{{ $cust->phone }}</td>
                <td>{{ $cust->address }}</td>
                <td>{{ $cust->email }}</td>
                <td>{{ $cust->city_id }}</td>
            </tr>
            @endforeach
        </table>
        @elseif(isset($customers))
        <h1 class="display-3 text-center">No Data matches your Criteria.</h1>
        @else
        <h1 class="display-3 text-center">No Data to Show</h1>
        @endif
    </div>
@endsection
