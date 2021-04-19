<?php
class Animal 
{
// propriétés de classe
    public $_espece;
    public $_regimeAlimentaire;
    public $_taille;
    public $_poids;

    public function __construct($espece,$regimeAlimentaire,$taille,$poids)
    {
        $this->_espece = espece;
        $this->_regimeAlimentaire = regimeAlimentaire;
        $this->_taille = taille;
        $this->_poids = poids;
    }

}
$chien = new Animal("Chien","Carnivore",110,16000);
echo $chien;
var_dump($chien);

?>

<?php
/**
* Définition de MyClass
*/

class MyClass
{
   public $public = 'Public';
   protected $protected = 'Protected';
   private $private = 'Private';

   function printHello()
   {
       echo $this->public;
       echo $this->protected;
       echo $this->private;
   }

 } // -- fin de la classe MyClass

 $obj = new MyClass();

 echo $obj->public; // Fonctionne
 echo $obj->protected; // Erreur fatale
 echo $obj->private; // Erreur fatale

 $obj->printHello(); // Affiche Public, Protected et Private

 /**
 * Définition de MyClass2
 */

 class MyClass2 extends MyClass
 {
     // On peut redéclarer les propriétés publics ou protégés, mais pas ceux privés
     public $public = 'Public2';
     protected $protected = 'Protected2';

     function printHello()
     {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
     }
 } // -- fin de la classe MyClass2()

 $obj2 = new MyClass2();
 echo $obj2->public; // Fonctionne
 echo $obj2->protected; // Erreur fatale
 echo $obj2->private; // Indéfini

 $obj2->printHello(); // Affiche Public2, Protected2 et Undefined (Indéfini)

?>