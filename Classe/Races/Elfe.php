<?php
namespace Races;

class Elfe extends \Commun implements \iRace {

  public function __construct(){
    $this->mov=2;
    $this->nom="Elfe";
  }
  public function Deplacer(){
    echo "ma manucure";
  }
}
