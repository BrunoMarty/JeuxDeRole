<?php
namespace Talent;

class Cretin extends \Commun implements \iTalent {

  public function __construct(){
    $this->mov=42;
    $this->nom="Cretin";
  }
  public function Attaquer(){
    echo "croiver le";
  }
}
