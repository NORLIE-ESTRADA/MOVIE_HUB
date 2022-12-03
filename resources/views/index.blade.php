@extends('layouts.main')

@section('content')
    
    <div id="app">
        <navbar></navbar>
        <homepage></homepage>
    </div>
    <div class="container mx-auto pt-4 px-4">
        <div class="popular-movies">
            <h4 class="uppercase text-danger text-center">POPULAR MOVIES</h4>
            <div class="row row-cols-4 gx-0 gy-4 my-auto">
                @foreach ($popularMovies as $popularMovie)
                <div class="mt-8">
                    <a href="#">
                        <img class='w-75' src='{{'https://image.tmdb.org/t/p/w500'.$popularMovie['poster_path']}}'> 
                    </a>
                        <div class="mt-2">
                            <a href="#" class="fs-6 mt-2">{{ $popularMovie['title']}}</a>
                        </div>
                </div>
                @endforeach

        </div>
    </div>

@endsection