<?php
namespace Races;

class Orc extends \Commun implements \iRace {

  public function __construct(){
    $this->pv=42;
    $this->def=1337;
    $this->nom="Orc";
  }
  public function Deplacer(){
    echo "Baston !";
  }

}
