<?php

final class Graphiste extends Personnage {

  public function __construct(){
    $this->race = new Races\Elfe();
    $this->talent = new Talent\Cretin();
    $this->mov=1;
    $this->att=0;
    $this->def=0;
    $this->pv=1;
    $this->nom=" ses faut!!!!!!!!";

  }
  public function Attaquer(){
    echo "les zygomatiques";
  }

  public function Deplacer(){
    echo " Photomerde";
  }

}
