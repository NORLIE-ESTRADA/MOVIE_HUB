<?php
include 'api-config.php';
include 'image.php';

$movie = ('movie/');
$movie_id = '642885';

$url = $domain.$movie.$movie_id."?".$api;
$json = file_get_contents($url);

$data = json_decode($json);
	$title = $data -> title;
	$img = $imgurl.$data -> poster_path;
	echo '<img alt="'.$title.'" src="' . $img . '">'. "<br>";
	echo "Title: ". $title . "<br>"; 
    echo "Description: ". $data -> overview. "<br>";
	echo "Genres: ";
    for ($x = 0; $x < count($data -> genres); $x++){
        echo $data -> genres[$x]->name. " ";
    }
	echo "<br>";
    echo "Release Date: ". $data  -> release_date. "<br>";
    echo "Language: ". $data -> original_language. "<br>"; 
    echo "Vote Rating: ". ((($data -> vote_average)*10)). "<br>"; 
    echo "<br>";


?>