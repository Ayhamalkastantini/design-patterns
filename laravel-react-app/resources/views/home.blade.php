@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

    <dev class="row">
        <div class="col-12">
            <div col="12 " style="margin-bottom: 30px"><h2>Customers List</h2></div>
            <table class="table table-hover table-striped">
                <thead class='thead-dark'>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Address </th>
                    <th scope="col">Action </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td >{{$customer->name}}</td>
                        <td >{{$customer->company_name}}</td>
                        <td >{{$customer->address}}</td>
                        <td >
                            <a href="{{ route('projects.show',[$customer->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                            <a href="{{ route('projects.edit',[$customer->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <div col="12 " style="margin-bottom: 30px"><h2>Users List</h2></div>
            <table class="table table-hover table-striped">
                <thead class='thead-dark'>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">Action </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td >{{$user->name}}</td>
                        <td >{{$user->email}}</td>
                        <td >
                            <a href="{{ route('projects.show',[$user->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                            <a href="{{ route('projects.edit',[$user->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <div col="12 "><h2>Projects List</h2></div>
            <table class="table table-hover table-striped">
                <thead class='thead-dark'>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td >{{$project->title}}</td>
                        <td >{{$project->description}}</td>
                        <td >{{$project->company_name}}</td>
                        <td >{{$project->status}}</td>
                        <td >{{$project->deadline}}</td>
                        <td >
                            <a href="{{ route('projects.show',[$project->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                            <a href="{{ route('projects.edit',[$project->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </dev>
</div>

@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
