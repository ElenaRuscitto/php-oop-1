<?php
class Info {

  public $regia;
  public $sceneggiatura;
  public $genere;


  function __construct(string $_regia, string $_sceneggiatura,array $_genere){

    $this-> regia = $_regia;
    $this-> sceneggiatura = $_sceneggiatura;
    $this-> genere = $_genere;
  }



  public function getFullInfo() {
    return "$this->regia, $this->sceneggiatura, $this->genere";
  }
}


?>