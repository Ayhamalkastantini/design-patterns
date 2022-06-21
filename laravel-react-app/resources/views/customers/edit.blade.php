@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading mt-5">Edit Project</div>
                <div class="card-body">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('customers')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" id="title" name="name" class="form-control" value="{{$customers->name}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">user id</label>
                            <input type="text" id="title" name="user_id" class="form-control" value="{{$customers->user_id}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company name</label>
                            <input type="text" id="company_name" name="company_name" class="form-control" value="{{$customers->company_name}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" id="company_name" name="address" class="form-control" value="{{$customers->address}}" required="">
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
