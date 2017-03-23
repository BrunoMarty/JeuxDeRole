<?php
namespace Talent;

class Guerrier extends \Commun implements \iTalent {

  public function __construct(){
    $this->att=3;
    $this->pv=42;
    $this->nom="Guerrier";
  }
  public function Attaquer(){
    echo "Allah ouakbar";
  }

}
