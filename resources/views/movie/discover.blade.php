<?php
$domain = 'https://api.themoviedb.org/3/';
$api = 'api_key=ca97e80fa7f832d4b3cfb76bb842710f';
$imgurl = ('https://image.tmdb.org/t/p/w200');

$discover = ('discover/movie?');

$discover2 = ('&language=en-US&sort_by=popularity.desc&include_adult=false');

$url = $domain.$discover.$api.$discover2;

$json = file_get_contents($url);

$data = json_decode($json);
$count = count($data -> results);

for ($x = 0; $x < $count; $x++){
	echo '<div class="box">';
	$movieid = $data -> results[$x] -> id. "<br>"; 
	$title = $data -> results[$x] -> title;
	$img = $imgurl.$data -> results[$x] -> poster_path;
	echo '<img alt="'.$title.'" src="' . $img . '">'. "<br>";
	echo $title. "<br>"; 
	$desc = $data -> results[$x] -> overview. "<br>";
	echo $desc. "<br>"; 
	echo "</div>";
}

?>