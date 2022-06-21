@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading mt-5">Edit Project</div>
                <div class="card-body">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('users')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" id="title" name="name" class="form-control" value="{{$users->name}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" id="title" name="email" class="form-control" value="{{$users->email}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" id="company_name" name="password" class="form-control" value="{{$users->password}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role name</label>
                            <select class="customers form-control full-width" id="role_name" name="role_id" required="">
                                <option value="">--Please choose an role--</option>
                                <option value="1">Customer</option>
                                <option value="2">Developer</option>
                                <option value="3">Admin</option>
                            </select>
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
