@extends('layouts.app')

@section('content')
<div class ='container mt-4 align-content-center'>
    <div class='mt-2 mb-2 w-25'>
        <a href="{{'users/add'}}" class='btn btn-outline-primary w-100  ' >
            Add user
        </a>
    </div>
    <table class="table table-hover table-striped">
        <thead class='thead-dark'>
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Password</th>
            <th scope="col">Role name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <td >{{$user->name}}</td>
            <td >{{$user->email}}</td>
            <td >{{$user->password}}</td>
            <td >{{$user->role}}</td>
            <td >
                <a href="{{ route('users.show',[$user->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                <a href="{{ route('users.edit',[$user->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
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
