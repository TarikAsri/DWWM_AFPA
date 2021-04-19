<?php
// Exemple nCode
class Vehicule
{
    public $_marque;
    public $_puissanceFiscale;
    public $_vitesseMax;
    protected $_vitesseCourante;

    // Définition du constructeur de la classe Vehicule
    function __construct($marque, $puissanceFiscale, $vitesseMax, $vitesseCourante)
    {
        $this->_marque = marque;
        $this->_puissanceFiscale = puissanceFiscale;
        $this->_vitesseMax = vitesseMax;
        $this->_vitesseCourante = 0;
    }
}
// Instanciation d'un vehicule
$maVoitureDeFonction = new Vehicule("Lotus", 11, 230, 90);
//-----------------------------------------------------------------------------------------
// Exemple myCode
class Videogame 
{
    public $_name;
    public $_genre;
    public $_setting;
    public $_releaseYear;

    //definition of constructor on the "Videogame" class
    function __construct($name, $genre, $setting, $releaseYear)
    {
        $this->_name = name;
        $this->_genre = genre;
        $this->_setting = setting;
        $this->_releaseYear = releaseYear;
    }
}
// Instanciation of a videogame
$videogameQ4_2020 = new Videogame("Assassin's Creed VALHALLA", "STEALTH", "Norway, England, Vinland", 2020);
$videohameQ3_2020 = new Videogame("Hyper Scape", "Battle Royale", "Sci-Fi Map", 2020);
//------------------------------------------------------------------------------------------













?>