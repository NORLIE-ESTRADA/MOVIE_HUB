@extends('layouts.main')



@section('content')
<div class="container mx-auto pt-4 px-4">
    <div class="movie-genres">
        <h4 class="uppercase text-danger text-center">DISCOVER MOVIES</h4>
        <div class="row row-cols-4 gx-0 gy-4 my-auto">
            @foreach ($movies as $movie)
                <x-movie-card :movie='$movie' />
            @endforeach
    </div>
</div>

@endsection