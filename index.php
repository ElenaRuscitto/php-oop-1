<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Info.php';


$speranza = new Movie('Star Wars: Episodio IV', 'Una nuova speranza', '1977', new Info('George Lucas', 'George Lucas', ['pop',' rock', 'pippi'])); 
$impero = new Movie('Star Wars: Episodio V', "L'Impero colpisce ancora", '1980', new Info('Irvin Kershner', 'Leigh Brackett & Lawrence Kasdan', ['pop',' rock', 'pippi'])); 
$jedi = new Movie('Star Wars: Episodio VI', 'Il ritorno dello Jedi', '1983', new Info('George Lucas', 'George Lucas', ['pop',' rock', 'pippi'])); 


var_dump($speranza->getFullStart());
var_dump($impero->getFullStart());
var_dump($jedi->getFullStart());
var_dump($speranza->info->getFullInfo());

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