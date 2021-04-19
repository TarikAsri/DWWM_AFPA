<?php
// global scope, declared outisde of function
$x = 5;

function testPortee() {
    // Utiliser $x dans la fonction génère une erreur
    echo "<p>La variable x à l'interieur de ma fonction vaut: ".$x."</p>";
}

testPortee();

echo "<p>La variable x en dehors de ma fonction vaut: ".$x."</p>";
?>

<?php
//local scope, declared inside of function, accessible only within function
function testPortee() {
    $x = 5; // portée locale de la variable
    echo "<p>La variable x à l'interieur de ma fonction vaut: ".$x."</p>";
}

testPortee();
//  Utiliser $x en dehors de la fonction génère une erreur.
echo "<p>La variable x en dehors de ma fonction vaut: ".$x."</p>";    
?>

<?php
// the "GLOBAL" keyword allows access to global variables from within functions
$x = 5;
$y = 10;

function testPortee() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; 
?> 

<?php
// IMPORTANT, all global variables are stored within $GLOBALS array and all you have to do is call it
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; 
?> 

<?php
// In principle, when a function has finished executing, all of its variables are destroyed. However, there may be times when we want to keep the value of a local variable from one function execution to another and therefore not destroy it.

To do this, use the keyword static:
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();

// Each time the function is called, the variable $xwill increment by one and therefore keep its value for the next time. However, the variable remains local to the function (i.e. using it outside the function will generate an error).

?>