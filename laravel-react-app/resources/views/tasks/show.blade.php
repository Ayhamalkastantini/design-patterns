@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-danger disappear" >
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{{ session()->get('message') }}</strong>
        </div>
    @endif

    @if (session('error'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    @endif
    <div class ='container mt-4 align-content-center'>
        <div class='mt-2 mb-2 w-25'>
            <a href="{{'/tasks'}}" class='btn btn-outline-primary w-100  ' >
                Back
            </a>
        </div>
        <table class="table table-hover table-striped">
            <thead class='thead-dark'>
            <tr>
                <th scope="col">Task name</th>
                <th scope="col">Description</th>
                <th scope="col">Community</th>
                <th scope="col">Status</th>
                <th scope="col">Deadline</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td >{{$tasks->taskName}}</td>
                    <td >{{$tasks->description}}</td>
                    <td >{{$tasks->community}}</td>
                    <td >{{$tasks->status}}</td>
                    <td >{{$tasks->deadline}}</td>
                    <td >
                        <form action="{{ route('destroy', $tasks->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
