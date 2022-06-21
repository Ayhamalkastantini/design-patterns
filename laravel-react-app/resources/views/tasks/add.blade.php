@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Add Task
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('tasks')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Project name</label>
                        <select class="customers form-control full-width" id="customers" name="project_id" required="">
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User name</label>
                        <select class="customers form-control full-width" id="customers" name="project_id" required="">
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task Name</label>
                        <input type="text" id="title" name="taskName" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" id="title" name="description" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Community</label>
                        <input type="text" id="title" name="community" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="customers form-control full-width" id="status" name="status" required="">
                            <option value="To do">To do</option>
                            <option value="In progress">In progress</option>
                            <option value="Done">Done</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deadline</label>
                        <input type="date" id="deadline" name="deadline" class="form-control" required="">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
