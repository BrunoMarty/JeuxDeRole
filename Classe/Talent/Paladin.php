<?php
namespace Talent;

class Paladin extends \Commun implements \iTalent {

  public function __construct(){
    $this->setPv(1);
    $this->def=2;
    $this->nom="Paladin";
  }
  public function Attaquer(){
    echo "Attaque\n";
  }
}
