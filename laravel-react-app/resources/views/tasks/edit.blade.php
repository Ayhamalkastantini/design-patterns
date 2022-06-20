@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading mt-5">Edit Project</div>
                <div class="card-body">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('tasks','data')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" id="title" name="taskName" class="form-control" value="{{$tasks->taskName}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" id="title" name="description" class="form-control" value="{{$tasks->description}}" required="">
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Project name</label>
                            <select class="customers form-control full-width" id="customers" name="project_id" required="">
                                @foreach($data as $customer)
                                    <option value="{{$customer->id}}">{{$customer->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company name</label>
                            <select class="customers form-control full-width" id="customers" name="project_id" required="">
                                @foreach($data as $customer)
                                    <option value="{{$customer->id}}">{{$customer->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">community</label>
                            <input type="text" id="deadline" name="community" class="form-control" value="{{$tasks->community}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deadline</label>
                            <input type="text" id="deadline" name="deadline" class="form-control" value="{{$tasks->deadline}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" id="status" name="status" class="form-control" value="{{$tasks->status}}" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
