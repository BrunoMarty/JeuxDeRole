<?php
namespace Talent;

class Mage extends \Commun implements \iTalent {

  public function __construct(){
    $this->att=2;
    $this->mov=1;
    $this->nom="Mage";
  }
  public function Attaquer(){
    echo "Youloulou";
  }

}
