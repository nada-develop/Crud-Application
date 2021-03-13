@extends('master')


@section('page-title')
    New Customer
@endsection


@section('page-content')
    <div class="container">
        <h1 class="display-2 mt-4 mb-4">New Customer</h1>
        <form action="/customers" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="cname">Customer Image</label>
                <input type="file" id="cimage" name="cimage" class="form-control">
            </div>
            <div class="form-group">
                <label for="cname">Customer Name</label>
                <input type="text" id="cname" name="cname" class="form-control">
            </div>
            <div class="form-group">
                <label for="cphone">Customer Phone</label>
                <input type="text" id="cphone" name="cphone" class="form-control">
            </div>
            <div class="form-group">
                <label for="caddress">Customer Address</label>
                <input type="text" id="caddress" name="caddress" class="form-control">
            </div>
            <div class="form-group">
                <label for="cemail">Customer Email</label>
                <input type="text" id="cemail" name="cemail" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">Customer City</label>
                <select name="city" id="city" class="form-control">
                    <option value="">Select Customer City</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="/customers" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
