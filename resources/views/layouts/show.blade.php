@extends('layouts.main')

@section('content')

<div id="app">
    <navbar></navbar>
</div>

<div class="movie-info border border-secondary">
    <div class="container mx-auto my-4 px-4 py-16 d-flex">
        <img src="{{asset('img/morbin.webp')}}" width="40%">
        <div class="px-4 py-3">
            <h2 class="fs-1">Morbius</h2>
            <div class="fs-4"><i class="bi bi-star-fill text-warning"></i> 200% | One of the Movies of All Time</div>
            <div class="fs-4 pb-3">Genre: Sci-Fi, Action</div>
            <div class="fs-5 pb-3">Determined to cure the disease that has plagued him his entire life, Morbius conducts a drastic experiment, which bears unforeseen consequences.</div>
            <button type="button" class="btn btn-danger btn-lg"><i class="bi bi-play-circle-fill"></i> Watch Trailer</button>
        </div>

   
        
    </div>
</div>

@endsection

