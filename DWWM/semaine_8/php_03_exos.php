<?php

// EXO 1
// Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
for ($exo1 = 1; $exo1 < 150; $exo1+=2) {
    echo $exo1."<br>";
}

// EXO 2
// Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.

$exo2 = 1; 
while ($exo2 <= 500) { 
    echo "Je dois faire des sauvegardes régulières de mes fichiers.<br>";  
    $exo2++; 
} 

// EXO 3
// Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant :

for($one = 1; $one <= 12; $one++) {
    echo $one." x 1 = ". 1*$one."<br>";
    echo $one." x 2 = ". 2*$one."<br>";
    echo $one." x 3 = ". 3*$one."<br>";
    echo $one." x 4 = ". 4*$one."<br>";
    echo $one." x 5 = ". 5*$one."<br>";
    echo $one." x 6 = ". 6*$one."<br>";
    echo $one." x 7 = ". 7*$one."<br>";
    echo $one." x 8 = ". 8*$one."<br>";
    echo $one." x 9 = ". 9*$one."<br>";
    echo $one." x 10 = ". 10*$one."<br>";
    echo $one." x 11 = ". 11*$one."<br>";
    echo $one." x 12 = ". 12*$one."<br>";
}

?>