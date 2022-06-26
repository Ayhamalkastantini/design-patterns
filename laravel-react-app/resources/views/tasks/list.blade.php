@extends('layouts.app')

@section('content')
<div class ='container mt-4 align-content-center'>
    <div class='mt-2 mb-2 w-25'>
        <a href="{{'tasks/add'}}" class='btn btn-outline-primary w-100  ' >
            Add Task
        </a>
    </div>
    <table class="table table-hover table-striped">
        <thead class='thead-dark'>
        <tr>
            <th scope="col">Task name</th>
            <th scope="col">Description</th>
            <th scope="col">Company name</th>
            <th scope="col">Status</th>
            <th scope="col">Deadline</th>
            <th scope="col">Customer</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td >{{$task->taskName}}</td>
            <td >{{$task->description}}</td>
            <td >{{$task->project->title}}</td>
            @if($task->status == 'Done')
                <td class="text-success text-bold" >{{$task->status}}</td>
            @endif
            @if($task->status == 'In progress')
                <td class="text-danger text-bold" >{{$task->status}}</td>
            @endif
            @if($task->status == 'To do')
                <td class="text-primary text-bold" >{{$task->status}}</td>
            @endif
            <td >{{$task->deadline}}</td>
            @if($task->user->name)
            <td >{{$task->user->name}}</td>
            @else
                <td >No customer yet</td>
            @endif
            <td >
                <a href="{{ route('tasks.show',[$task->id]) }}" class="btn btn-success w-100 text-light ">Show</a>
                <a href="{{ route('tasks.edit',[$task->id]) }}" class='btn btn-warning w-100 mb-2 mt-2 text-light' >Edit</a>
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
