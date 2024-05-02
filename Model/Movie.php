<?php
class Movie {

  public $titolo;
  public $sottotitolo;
  public $anno;


  function __construct(string $_titolo, string $_sottotitolo, string $_anno ){

    $this-> titolo = $_titolo;
    $this-> sottotitolo = $_sottotitolo;
    $this-> anno = $_anno;
  }



  public function getFullInfo() {
    return "$this->titolo, $this->sottotitolo, $this->anno";
  }
}


?>