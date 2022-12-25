<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discoverMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming')
            ->json()['results'];
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        return view('index',[
            'discoverMovies' => $discoverMovies,
            'popularMovies' => $popularMovies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
        ->json();

        return view('layouts.show')->with('movie', $movie);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search($query)
    {
        $results = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/search/movie?query='.$query)
        ->json()['results'];


        return view('layouts.search')->with('results', $results);
    }

    public function genre($genre)
    {
        $movies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/movie?with_genres='.$genre)
        ->json()['results'];

        return view('layouts.genres')->with('movies', $movies);
    }

}
