@extends('layouts.main')

@section('content')

<div id="app">
    <navbar></navbar>
</div>

<div class="movie-info border border-secondary">
    <div class="container mx-auto my-4 px-4 py-16 d-flex">
        <img src="{{'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}" width="40%">
        <div class="px-4 py-3">
            <h2 class="fs-1">{{$movie['title']}}</h2>
            <div class="fs-4"><i class="bi bi-star-fill text-warning"></i> {{round($movie['vote_average']*10) . '%'}} | {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</div>
            <div class="fs-4 pb-3">Genres: 
                @foreach ($movie['genres'] as $genre)
                    {{ $genre['name'] }}@if (!$loop->last), @endif
                @endforeach
            </div>
            <div class="fs-5 pb-3">{{$movie['overview']}}</div>
            @if (count($movie['videos']['results']))
            <button type="button" class="btn btn-danger btn-lg" onclick="location.href='https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}'" ><i class="bi bi-play-circle-fill"></i> Watch Trailer</button>
            @endif
            
        </div>

   
        
    </div>
</div>

@endsection

