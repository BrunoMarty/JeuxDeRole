<?php

//require_once ("Commun.php");
//require_once ("iRace.php");
//require_once ("iTalent.php");
//require_once ("Personnage.php");
//require_once ("SuperLapin.php");
//require_once ("Graphiste.php");
//require_once ("Paamayim.php");
//
//require_once ("Races/Elfe.php");
//require_once ("Races/Humain.php");
//require_once ("Races/Lapin.php");
//require_once ("Races/Nain.php");
//require_once ("Races/Orc.php");
//
//require_once ("Talent/Archer.php");
//require_once ("Talent/Cretin.php");
//require_once ("Talent/Guerrier.php");
//require_once ("Talent/Mage.php");
//require_once ("Talent/Paladin.php");

require_once('Autoloader.php');
//Autoloader::register();



 $Briguette = new Personnage("Daniel", new Races\Lapin(), new Talent\Cretin());
 echo $Briguette->getNom();
 echo " ";
 $Briguette->Attaquer();
 echo " ";
 $Briguette->Deplacer();

 $Kikitte = new Personnage("Emily", new Races\Elfe(), new Talent\Archer());
 echo $Kikitte->getNom();
 echo " ";
 $Kikitte->Attaquer();
 echo " ";
 $Kikitte->Deplacer();

 $ultime = new SuperLapin;
 echo " ";
 $ultime->Attaquer();
 echo " ";
 $ultime->Deplacer();

 $crayon = new Graphiste;
 echo " ";
 $crayon->Attaquer();
 echo " ";
 $crayon->Deplacer();
