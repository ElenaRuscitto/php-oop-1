<?php

require_once __DIR__ . '/Model/Movie.php';


$speranza = new Movie('Star Wars: Episodio IV', 'Una nuova speranza', '1977'); 
$impero = new Movie('Star Wars: Episodio V', "L'Impero colpisce ancora", '1980'); 
$jedi = new Movie('Star Wars: Episodio VI', 'Il ritorno dello Jedi', '1983'); 


var_dump($speranza->getFullInfo());
var_dump($impero->getFullInfo());
var_dump($jedi->getFullInfo());
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>
  
</body>
</html>