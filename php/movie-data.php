<?php
include 'api-config.php';
include '/image.php';

$discover = ('movie/');
$movie_id;
$genres = array();
    echo "Title: ". $data -> title. "<br>"; 
	$img = $imgurl.$data -> poster_path;
	echo '<img alt="'.$title.'" src="' . $img . '">'. "<br>";
    echo "Description: ". $data -> overview. "<br>";
    for ($x = 0; $x < $count; $x++){
        $genres[$x] = $data -> genres->name;
    }
    echo "Release Date: ". $data  -> release_date. "<br>";
    echo "Language: ". $data -> original_language. "<br>"; 
    echo "Vote Rating: ". ((($data -> vote_average)*10)). "<br>"; 
    echo "<br>";


?>