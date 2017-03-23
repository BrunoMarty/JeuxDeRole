<?php

abstract class Commun {
  protected $nom = "";
  protected $pv = 0;
  protected $att = 0;
  protected $def = 0;
  protected $mov = 0;

  public function setNom($nom){
    $this->nom = $nom;
  }
  public function getNom(){
    return $this->nom;
  }
  //pour les pv
  public function getPv(){
    return $this->pv;
  }
  public function setPv($pv){
    $this->pv = $pv;
  }
  //pour l'attaque
  public function getAtt(){
    return $this->att;
  }
  public function setAtt($att){
    $this->att = $att;
  }
  //pour la def
  public function getDef(){
    return $this->def;
  }
  public function setDef($def){
    $this->def = $def;
  }
  //pour les mov
  public function getMov(){
    return $this->mov;
  }
  public function setMov($mov){
    $this->mov = $mov;
  }
}
