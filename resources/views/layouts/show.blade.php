@extends('layouts.main')

@section('content')


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

            <div class="d-flex">
                @foreach ($movie['credits']['crew'] as $crew)
                    @if ($loop->index < 2)
                    <div class="mx-3 my-3">
                        <div class="fs-4">{{$crew['name']}}</div>
                        <div class="fs-5">{{$crew['job']}}</div>
                    </div>
                    @endif
                @endforeach

            </div>
            @if (count($movie['videos']['results']))
            <button type="button" class="btn btn-danger btn-lg my-3" onclick="location.href='https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}'" ><i class="bi bi-play-circle-fill"></i> Watch Trailer</button>
            @endif
            @if( auth()->check() )
            <form method="POST" action="/bookmark">
                {{ csrf_field() }}
            <input type="hidden" name="userID" value="{{auth()->user()->id}}">  
            <input type="hidden" name="movieID" value="{{$movie['id']}}">
            <button type="submit" class="btn btn-success btn-lg my-2"><i class="bi bi-bookmark-fill"></i> Add to Bookmark</button>
            </form>
            @endif
        </div>
    </div>
</div>
<div class="mt-5 mx-5">
    <h2>Cast</h2>
    <div class="d-flex">
        @foreach ($movie['credits']['cast'] as $cast)
            @if ($loop->index < 5)
            <div class="mx-3 my-3">
                <img src="{{'https://image.tmdb.org/t/p/w300'.$cast['profile_path']}}" width="80%">
                <div class="fs-4">{{$cast['name']}}</div>
                <div class="fs-5">{{$cast['character']}}</div>
            </div>
            @endif
        @endforeach

    </div>
</div>

@endsection

