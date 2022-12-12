@extends('layouts.main')



@section('content')
    <div id="app">
        <heading></heading>
    </div>
    <div class="container mx-auto pt-4 px-4">
        <div class="popular-movies">
            <h4 class="uppercase text-danger text-center">POPULAR MOVIES</h4>
            <div class="row row-cols-4 gx-0 gy-4 my-auto">
                @foreach (array_slice($popularMovies, 0,12) as $movie)
                    <x-movie-card :movie='$movie' />
                @endforeach
        </div>
    </div>
    <div class="container mx-auto pt-4 px-4">
        <div class="discover-movies">
            <h4 class="uppercase text-danger text-center">UPCOMING MOVIES</h4>
            <div class="row row-cols-4 gx-0 gy-4 my-auto">
                @foreach (array_slice($discoverMovies, 0,12) as $movie)
                    <x-movie-card :movie='$movie' />
                @endforeach
        </div>
    </div>

@endsection