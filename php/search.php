<?php
include './api-config.php';



$search = ('search/movie?');
$query = ('&query=');
$rawinput = (' ');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $rawinput = $_POST["search"];
}

$input = str_replace(' ', '+', $rawinput);

$url = $domain.$search.$api.$query.$input;
$json = file_get_contents($url);

$data = json_decode($json);
$count = count($data -> results);

		for ($x = 0; $x < $count; $x++){
			echo "Title: ". $data -> results[$x] -> title. "<br>"; 
			echo "Image: ". $data -> results[$x] -> poster_path. "<br>";
			echo "Description: ". $data -> results[$x] -> overview. "<br>";
			echo "Release Date: ". $data -> results[$x] -> release_date. "<br>";
			echo "Language: ". $data -> results[$x] -> original_language. "<br>"; 
           		echo "Vote Rating: ". ((($data -> results[$x] -> vote_average)*10)). "<br>"; 
			echo "<br>";
		}
?>
