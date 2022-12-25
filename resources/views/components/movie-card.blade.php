<div class="mt-8">
    <a href="{{ route('movies.show',$movie['id'])}}">
        <img class='w-75' src='{{'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}' alt="poster" data-bs-toggle="tooltip" title="{{ $movie['overview']}}"> 
    </a>
    <h6 class="mt-3">{{ $movie['title']}}</h6>
        <div class="mt-2">
            <a href="{{ route('movies.show',$movie['id'])}}" class="fs-6 mt-2"></a>
        </div>
</div>