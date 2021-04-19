<?php

include_once "vehicule.class.php";
include_once "voiture.class.php";
include_once "conducteur.class.php";

$voitureDeCarlos = new Voiture();
$voitureDeTarik = new Vehicule();
$voitureDeYoucef = new Voiture();
// echo $voitureDeCarlos->Calcul();
// var_dump($voitureDeCarlos->_marque);
// var_dump($voitureDeCarlos->_modele);

$voitureDeCarlos->AfficherProprietes("PEUGEOT","607","123456");
$voitureDeCarlos->_marque = "PEUGEOT";
$voitureDeCarlos->_modele = "607";
$voitureDeCarlos->_immatriculation = "123456";

// echo $voitureDeTarik->Calcul();
// var_dump($voitureDeTarik->_marque);
// var_dump($voitureDeTarik->_modele);

$voitureDeTarik->_marque = "PEUGEOT";
$voitureDeTarik->_modele = "607";
$voitureDeTarik->_immatriculation = "789456";

// echo $voitureDeTarik->Calcul();
// var_dump($voitureDeTarik->_marque);
// var_dump($voitureDeTarik->_modele);

$voitureDeYoucef->_marque = "RENAULT";
$voitureDeYoucef->_modele = "Mégane";
$voitureDeYoucef->_immatriculation = "147852";

echo "Véhicule Carlos";
$voitureDeCarlos->AfficherProprietes();
var_dump($voitureDeCarlos->_marque);
var_dump($voitureDeCarlos->_modele);
var_dump($voitureDeCarlos->_immatriculation);
echo "Véhicule Tarik";
var_dump($voitureDeTarik->_marque);
var_dump($voitureDeTarik->_modele);
var_dump($voitureDeTarik->_immatriculation);
echo "Véhicule Youcef";
var_dump($voitureDeYoucef->_marque);
var_dump($voitureDeYoucef->_modele);
var_dump($voitureDeYoucef->_immatriculation);

?>