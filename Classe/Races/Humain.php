<?php
namespace Races;

class Humain extends \Commun implements \iRace {

  public function __construct(){
    $this->pv=2;
    $this->def=2;
    $this->nom="Humain";
  }
  public function Deplacer(){
    echo "c'est faut";
  }

}
