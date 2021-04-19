<?php

include "conducteur.class.php";

class Vehicule
{
    protected $_marque;
    protected $_modele;
    protected $_immatriculation;
    protected $_annee;
    protected $_nbrePlaces;
    protected $_puissanceFiscale;
    protected $_typeVehicule;

    public function Calcul(){
        $_modele = 5;
        $_annee = 9;
        $_marque = $_modele + $_annee;
        var_dump($_marque);
        return "Les variables sont accessibles";
    }
}


?>