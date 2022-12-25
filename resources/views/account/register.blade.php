@extends('layouts.main')



@section('content')
<div>
        <h1 class="my-3" style="margin-left:44%;">Register</h1>
        <div class="d-flex" style="margin-left:40%;">
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control w-100" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control w-100" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control w-100" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <button style="cursor:pointer" type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
</div>
@endsection

