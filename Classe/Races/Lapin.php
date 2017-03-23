<?php
namespace Races;

class Lapin extends \Commun implements \iRace  {

  public function __construct(){
    $this->mov=10;
    $this->nom="Lapin";
  }
  public function Deplacer(){
    echo "Bwaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah";
  }

}
