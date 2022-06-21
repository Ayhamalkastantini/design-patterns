@extends('layouts.app')

@section('content')
<div class ='container mt-4 align-content-center'>
    <div class='mt-2 mb-2 w-25'>
        <a href="{{'customers/add'}}" class='btn btn-outline-primary w-100  ' >
            Add user
        </a>
    </div>
    <table class="table table-hover table-striped">
        <thead class='thead-dark'>
        <tr>
            <th scope="col">name</th>
            <th scope="col">Company name</th>
            <th scope="col">Address</th>
            <th scope="col">User id</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td >{{$customer->name}}</td>
            <td >{{$customer->company_name}}</td>
            <td >{{$customer->address}}</td>
            <td >{{$customer->user_id}}</td>
            <td >
                <a href="{{ route('customers.show',[$customer->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                <a href="{{ route('customers.edit',[$customer->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
