<?php
class Movie {

  public $titolo;
  public $sottotitolo;
  public $anno;

  public $info;
  // public $regia;
  // public $sceneggiatura;


  function __construct(string $_titolo, string $_sottotitolo, int $_anno, Info $_info){

    $this-> titolo = $_titolo;
    $this-> sottotitolo = $_sottotitolo;
    $this-> anno = $_anno;

    $this-> info = $_info;
  }

  public function getFullStart() {
    return "$this->titolo, $this->sottotitolo, $this->anno, $this->info";
  }
}


?>