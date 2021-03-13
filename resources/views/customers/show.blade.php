@extends('master')

@section('page-title')
    Show Customer Profile
@endsection


@section('page-content')
    <div class="container">
        <h1 class="display-2 mt-4 mb-4">Customer Profile</h1>
        <img src="{{ asset('storage/customers/' . $customer->image) }}" style="width: 250px;">
        <ul>
            <li>ID:      {{ $customer->id }}  </li>
            <li>Name:    {{ $customer->name }}  </li>
            <li>Phone:   {{ $customer->phone }}  </li>
            <li>Address: {{ $customer->address }} </li>
            <li>Email:   {{ $customer->email }} </li>
            <li>City:    {{ $customer->city->city_name }} </li>
        </ul>
    </div>
@endsection
