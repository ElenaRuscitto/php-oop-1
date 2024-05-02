<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Info.php';


$speranza = new Movie('Star Wars: Episodio IV', 'Una nuova speranza', '1977', new Info('George Lucas', 'George Lucas', ['Fantascienza','Avventura', 'Fantasi', 'Azione'])); 
$impero = new Movie('Star Wars: Episodio V', "L'Impero colpisce ancora", '1980', new Info('Irvin Kershner', 'Leigh Brackett & Lawrence Kasdan', ['Fantascienza','Avventura', 'Fantasi', 'Azione'])); 
$jedi = new Movie('Star Wars: Episodio VI', 'Il ritorno dello Jedi', '1983', new Info('George Lucas', 'George Lucas', ['Fantascienza','Avventura', 'Fantasi', 'Azione'])); 


var_dump($speranza);
var_dump($impero);
var_dump($jedi);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container">
    <div class="row">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $speranza->titolo ?>
          </h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $speranza->sottotitolo ?>
          </h6>
          <p class="card-text text-end">
            <?php echo $speranza->anno ?>
          </p>
          <p class="card-text"> Regia:
            <?php echo $speranza->info->regia ?>
          </p>
          <p class="card-text"> Sceneggiatura:
            <?php echo $speranza->info->sceneggiatura ?>
          </p>
          <ul class="list-group list-group-flush"> Genere:
            <?php foreach($speranza->generi as $genere): ?>
              <li class="list-group-item">
                 <?php echo $genere ?> 
              </li>
      
            <?php endforeach ?>
          </ul>

        </div>
      </div>

      
    </div>
  </div>
  
</body>
</html>