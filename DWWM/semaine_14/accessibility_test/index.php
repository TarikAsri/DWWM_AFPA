<?php
include_once "pokemon.class.php";
include_once "pseudoPokemon.class.php";

$Pikachu = new pokemon();
$Pikachu->showPokemon("Pikachu","electric","21"); //accessible

//$Pikachu->_name = "Pikachu"; //erreur fatal, il faut des parametres "public"
//$Pikachu->_type = "electric"; //erreur fatal
//$Pikachu->_num = "21"; //erreur fatal
var_dump($Pikachu);

// $Mikachu = new PseudoPokemon();
// $Mikachu->_name = "Mikachu";
// $Mikachu->_type = "null";
// $Mikachu->_num = "-150";
// $Mikachu->_universe = "MCU";
// var_dump($Mikachu);

?>

