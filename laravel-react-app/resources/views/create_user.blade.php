@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">User Management | Add</h2>
        <br>
        <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

            <label class="form-group">First Name:</label>
            <input type="text" class="form-control" placeholder=" Name" name="name">
            <label> Email:</label>
            <input type="text" class="form-control" placeholder="Last Name" name="email">
            <label>Password:</label>
            <input type="text" class="form-control" placeholder="Last Name" name="password">
            <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
