<?php
final class SuperLapin extends Personnage {

  public function __construct(){
    $this->race = new Races\Lapin();
    $this->talent = new Talent\Cretin();
    $this->mov=666;
    $this->att=666;
    $this->def=666;
    $this->pv=666;
    $this->nom="Jean Jean";
  }

public function Attaquer(){
  echo "Vous ne pouvez rien contre Super Lapin";
}

public function Deplacer(){
  echo "I believe i can fly";
}
}
