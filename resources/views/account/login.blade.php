@extends('layouts.main')



@section('content')
<div id='app'>
    <navbar></navbar>
</div>

<h2>Log In</h2>
    
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group my-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control w-25" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control w-25" id="password" name="password">
        </div>

        <div class="form-group my-3">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

@endsection