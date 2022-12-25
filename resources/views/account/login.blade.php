@extends('layouts.main')



@section('content')
<div>
    <h1 class="my-3" style="margin-left:44%;">Log In</h1>
    <div class="d-flex" style="margin-left:40%;">
        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group my-5">
                <label for="email">Email:</label>
                <input type="email" class="form-control w-100" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control w-100" id="password" name="password">
            </div>

            <div class="form-group my-3" style="margin-left: 30%">
                <button style="cursor:pointer" type="submit" class="btn btn-danger">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection