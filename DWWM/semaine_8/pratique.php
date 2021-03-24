<html>  
<body>
<!-- This is how you make a PHP line in an HTML document -->
  <h1><?php echo "Bonjour le monde 1"; ?></h1>

<!-- this on the other hand is how you create HTML elements in a PHP file -->
  <?php 
   echo"<h1>Bonjour le monde 2</h1>"; 
  ?> 
</body>
</html>

<?php

  $bonjour = "Bonjour le monde 3"; 
  echo "<b>$bonjour</b><br>";

  echo "Affichage d'un \"quote and quote\" so that it doesn't get caught up as a string limiter (escape).<br>"; 

  echo "Bonjour le monde 4\n<br>"; 

  $stark = "Winter"; 
  echo $stark . " is coming !<br>"; 

// ELSE IF STATEMENTS
// Standard ↓
  $age1 = 24;
  if ($age1>=18)
  {
     $reponse1 = "majeur";
  }
  else
  {
     $reponse1 = "mineur";
  } // then do the echo...
  echo "Standard: Vous etes ".$reponse1. ".<br>";

// Complete ↓
  $age2 = 12; 

    (($age2 >= 18) ? $reponse2="majeur" : $reponse2="mineur"); 

    echo " Complete: Vous êtes ".$reponse2. ".<br>"; 

// Advanced↓
  $age3 = 25;

  echo "Advanced: Vous êtes ".(($age3 >= 18) ? "majeur" : "mineur"). ".<br>"; 

// to declare variables
  $variable = "Afpa<br>";
  echo $variable;

// Arrays
  $couleur[] = "red";
  $couleur[] = "blue";
  $couleur[] = "white";
  $couleur[] = "black";

  // pour afficher la valeur "white", on écrira :
  echo $couleur[2]."<br>";

// About variables...
  $a = $b = 2; 

  function somme() { 
// if you want to call a variable that's stored outside of the function and bring it inside, you need to call the GLOBAL variables
  global $a, $b; 
  $b = $a + $b; 
  } 

  somme(); 

  echo $b."<br>"; 

// else set a STATIC variable inside of a function to make sure it doesn't get overwritten by a possible new one with same name
  function Test1 () 
  { 
     static $a=0; 
     echo "$a<br />"; 
     $a++;
  } 
  
  // Appel de la fonction (3 fois)
  Test1(); 
  Test1(); 
  Test1(); 

// The error_log() function allows to add information and personalized error messages to the php_error.log file
  $myVar = "KO";

  if ($myVar == "OK") 
  {   
     echo"<br>C'est bon<br>";
  } 
  else 
  {
      echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
      error_log("Ouh la la pas bien"); // Message enregistré dans le fichier 'C:/wamp/logs/php_error.log' 
  }
// PRINTF and SPRINT F  
  $euro = 6.55957;
  printf("%.2f FF<br />",$euro);

  $money1 = 68.75;
  $money2 = 54.35;
  $money = $money1 + $money2;

  echo $money; // affiche 123.1;

  echo "affichage sans printf : ".$money."<br>";

  $monformat = sprintf("%01.2f", $money);

  echo $monformat; // affiche 123.10

  echo "affichage avec printf : ".$monformat."<br>";

  $year = "2002";
  $month = "4";
  $day = "5";

  $date = sprintf("%04d-%02d-%02d", $year, $month, $day);

  echo $date"<br>"; // affichera "2002-04-05"
  echo "affichage avec sprintf : ".$date"<br>";






















?>