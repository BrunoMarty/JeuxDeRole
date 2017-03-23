<?php
class Personnage extends Commun {

  const pa = 2;

  private $race = null;
  private $talent = null;
  public function Attaquer(){
    $this->getTalent()->Attaquer();
  }
  public function Deplacer(){
    $this->getRace()->Deplacer();
  }
  public function Mourir(){}
  public function NeRienFaire(){}

    public function __construct($nom, $race, $talent){
      $this->nom = $nom;
      $this->race = $race;
      $this->talent = $talent;
    }
    public function getRace(){
      return $this->race;
    }
    public function getTalent(){
      return $this->talent;
    }
}
