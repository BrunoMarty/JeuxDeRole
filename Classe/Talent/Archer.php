<?php
namespace Talent;

class Archer extends \Commun implements \iTalent {

  public function __construct(){
    $this->att=2;
    $this->mov=5;
    $this->nom="Archer";
  }
  public function Attaquer(){
    echo "sa met plus longtemps pour faire l'attaque";
  }

}
