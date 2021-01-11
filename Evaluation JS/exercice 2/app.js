// E X E R C I S E - 2 
/*
//  COMMENT FAIURE UNE FONCTION

var yearBirth = prompt("Enter a year :");

function yearOfBirth(yearBirth) {
    var year = yearBirth - 2000;
    return year;
}
yearOfBirth(yearBirth);
console.log(yearOfBirth(yearBirth));
*/
////////////////////////////////////////////////

const num = prompt("Enter a number :");

function multiplyNumber() {
    for(var x = 1; x <= 10; x++) {
        sum = x * num;
        console.log(sum);
        console.log(num + " * " + x + " = " + sum);
        
    }
}
multiplyNumber();

////////////////////////////
// Version 2 sans fonction

const number = prompt("Enter a number: ");


for(var i = 1; i <= 10; i++) {
    var result = i * number;
    console.log(number + " * " + i + " = " + result);
}

