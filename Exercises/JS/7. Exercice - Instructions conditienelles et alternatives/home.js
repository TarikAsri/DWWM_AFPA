var number = window.prompt("Entrez un nombre :");

if (number % 2 == 0) {
    console.log("Le nombre est pair");
}
else {
    console.log("le nombre est impair");
}

var age = window.prompt("Entrez votre age :");

if (age >= 18) {
    console.log("Vous etes majeur");
}
else {
    console.log("Vous etes mineur");
}

//je dois encore comprender comment ça marche correctement
var operator = window.prompt("Entre un operateur");
var a = 2;
var b = 3;
res = a + b;
switch (operator)
{
    case "+" :
        console.log("Correct! Le resultat est " + res);
        break;

    case "-" :
        console.log("Error!");
        break;
    
    case "*" :
        console.log("Error!");
        break;
    
    case "/" :
        console.log("Error!");
        break;
}
