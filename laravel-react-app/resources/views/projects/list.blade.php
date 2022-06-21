@extends('layouts.app')

@section('content')
<div class ='container mt-4 align-content-center'>
    <div class='mt-2 mb-2 w-25'>
        <a href="{{'projects/add'}}" class='btn btn-outline-primary w-100  ' >
            Add Project
        </a>
    </div>
    <table class="table table-hover table-striped">
        <thead class='thead-dark'>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Company name</th>
            <th scope="col">Status</th>
            <th scope="col">Deadline</th>
            <th scope="col">Customer</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ProjectList as $project)
        <tr>
            <td >{{$project->title}}</td>
            <td >{{$project->description}}</td>
            <td >{{$project->company_name}}</td>
            <td >{{$project->status}}</td>
            <td >{{$project->deadline}}</td>
            @if($project->company_name)
                <td >{{$project->company_name}}</td>
            @endif
            <td >
                @if($roleName == 'Admin')
                <a href="{{ route('projects.show',[$project->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                <a href="{{ route('projects.edit',[$project->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
                @endif
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
