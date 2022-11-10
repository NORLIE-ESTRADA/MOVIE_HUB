<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class SearchController extends Controller
{
    public function search(Request $request){
        $domain = 'https://api.themoviedb.org/3/';
        $api = 'api_key=ca97e80fa7f832d4b3cfb76bb842710f';
        $imgurl = ('https://image.tmdb.org/t/p/w200');

        $search = ('search/movie?');
        $search2 = ('&query=');

        $query = $request->input('search');
        $input = str_replace(' ', '+', $query);

        $url = $domain.$search.$api.$search2.$input;
        $json = file_get_contents($url);

        $data = json_decode($json);
        $count = count($data -> results);
        echo "<h3>Found ". $count." results!". "</h3><br><br>";
            for ($x = 0; $x < $count; $x++){
                echo "ID: ". $data -> results[$x] -> id. "<br>"; 
                $title = $data -> results[$x] -> title;
                echo "Title: ".$title. "<br>"; 
                $img = $imgurl.$data -> results[$x] -> poster_path;
                echo '<img alt="'.$title.'" src="' . $img . '">'. "<br>";
                echo "Description: ". $data -> results[$x] -> overview. "<br>";
                echo "<br>";
            }
        }
}
