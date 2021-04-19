<?php

include_once "vehicule.class.php";

class Voiture 
{
    private $_nbrePortes;

    public function AfficherProprietes($p_marque,$p_model,$p_immat){
        if($p_marque == "PEUGEOT"){
            $this->_marque = "RENAULT";
        }
        $this->_marque = $p_marque;
        $this->_modele = $p_model;
        $this->_immatriculation = $p_immat;
        var_dump($this->_marque);
        var_dump($this->_modele);
        var_dump($this->_immatriculation);
    }
}


?>