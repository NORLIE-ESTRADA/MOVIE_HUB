<?php
include 'api-config.php';
include 'image.php';


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
?>
