@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading mt-5">Edit Project</div>
                <div class="card-body">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('projects')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{$projects->title}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" id="title" name="description" class="form-control" value="{{$projects->description}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company name	</label>
                            <input type="text" id="company_name" name="company_name" class="form-control" value="{{$projects->company_name}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deadline</label>
                            <input type="text" id="deadline" name="deadline" class="form-control" value="{{$projects->deadline}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" id="status" name="status" class="form-control" value="{{$projects->status}}" required="">
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
