@extends('master')


@section('page-title')
    Edit Customer
@endsection


@section('page-content')
    <div class="container">
        <h1 class="display-2 mt-4 mb-4">Edit Customer</h1>
        <form action="/customers/{{ $customer->id }}" method="POST">
            @method('PUT')
            <div class="form-group">
                <label for="cname">Customer Name</label>
                <input type="text" id="cname" name="cname" class="form-control" value="{{ $customer->name }}">
            </div>
            <div class="form-group">
                <label for="cphone">Customer Phone</label>
                <input type="text" id="cphone" name="cphone" class="form-control" value="{{ $customer->phone }}">
            </div>
            <div class="form-group">
                <label for="caddress">Customer Address</label>
                <input type="text" id="caddress" name="caddress" class="form-control" value="{{ $customer->address }}">
            </div>
            <div class="form-group">
                <label for="cemail">Customer Email</label>
                <input type="text" id="cemail" name="cemail" class="form-control" value="{{ $customer->email }}">
            </div>
            <div class="form-group">
                <label for="city">Customer City</label>
                <select name="city" id="city" class="form-control">
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ $city->id == $customer->city_id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="/customers" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
