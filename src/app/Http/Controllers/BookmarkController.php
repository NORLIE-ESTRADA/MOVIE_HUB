<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class BookmarkController extends Controller
{
    public function create(){
        return view('layouts.show');
    }
    public function store(Request $req)
    {
        $bookmark = new Bookmark;
        $bookmark->userID = $req->userID;
        $bookmark->movieID = $req->movieID;
        $bookmark->save();

        return redirect()->to('/movies/'.$req->movieID);
    }

    public function show($userID){
        $movieIDs = DB::table('bookmarks')->select('movieID')->where('userID', $userID)->distinct()->get();
        $movies = $movieIDs->map(function ($movieID) {
            return Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$movieID->movieID)
            ->json();
        });
        return view('layouts.profile')->with('movies',$movies);
    }
}
