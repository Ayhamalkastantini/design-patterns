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
                Add project
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('users')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" id="title" name="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="title" name="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password	</label>
                        <input type="password" id="company_name" name="password" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role name</label>
                        <select class="customers form-control full-width" id="role_name" name="role_id" required="">
                            <option value="1">Customer</option>
                            <option value="2">Developer</option>
                            <option value="3">Admin</option>
                        </select>
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
