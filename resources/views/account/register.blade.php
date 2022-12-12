@extends('layouts.main')

<div id='app'><navbar></navbar></div>

@section('content')
<div class="mx-4 my-3">
    <h2>Register</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control w-25" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control w-25" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control w-25" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

