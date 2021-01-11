var mom = window.prompt("Invite de script:\nEntrez votre nom");

var prenom = window.prompt("Invite de script:\nEntrez votre prénom");

if (window.confirm("Etes-vous un homme?") == true) {
    var pre = "M.";
} else {
    if (window.confirm("Etes-vous une famme?") == true) {
        var pre = "Mme.";
    }
}

alert("Hello " + pre + " " + nom + " " + prenom + ",\nBienvenue sur notre site web!");

/* sinon

if (window.confirm("Etes-vous un homme?") == true) {
    var pre = "M.";
} else {
    var pre = "Mme.";
} */