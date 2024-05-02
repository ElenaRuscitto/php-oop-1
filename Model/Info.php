<?php
class Info {

  public $regia;
  public $sceneggiatura;
  public $generi;


  function __construct(string $_regia, string $_sceneggiatura, array $_generi){

    $this-> regia = $_regia;
    $this-> sceneggiatura = $_sceneggiatura;
    $this-> generi = $_generi;
  }



  public function getFullInfo() {
    return "$this->regia, $this->sceneggiatura, $this->generi";
  }
}


?>