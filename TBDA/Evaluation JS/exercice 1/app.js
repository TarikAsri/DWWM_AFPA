// E X E R C I S E - 1 
var young, adult, senior, age;
young = 0;
adult = 0;
senior = 0;

// 3allawi

do { // what needs to be done is within the "DO"
    age = window.prompt("Enter your age");
    if (age < 20) {
        young++;
    } else if (age >= 20 && age <= 40) {
        adult++;
    } else { //if (age >= 100)
        senior++;
    }
    console.log("done");
} while (age < 100); // as long as the condition is true!

document.write("There are " + young + " youngsters. There are " + adult + " adults. There are " + senior + " seniors.");


// if you have repetitive tasks then you only have "FOR" "DO" and "WHILE"
// for is when you know ahead of time how many times you'll repeat the action
// if you don't you use "DO" "WHILE"
// difference is when you use do, you're making sure that the program will run the code at least once, when you use while, it will use it only as long as the function is true, if not (i.e at the very beginning) your code might not even run at all.

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////


