<?php
namespace Races;

class Nain extends \Commun implements \iRace {

  public function __construct(){
    $this->pv=5;
    $this->att=5;
    $this->def=5;
    $this->nom="Nain";
  }
    public function Deplacer(){
      echo "on peut le lancer";
    }
}
