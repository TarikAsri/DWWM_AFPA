const validate = event => {
    event.preventDefault();
    // validation for nom
    const nom = document.getElementById("nom").value;
    const nomRegEx = /^[a-zA-Z ]{2,15}$/;
    const nomVerif = nomRegEx.test(nom);

    // prenom
    const prenom = document.getElementById("prenom").value;
    const prenomRegEx = /^[a-zA-Z ]{2,15}$/;
    const prenomVerif = prenomRegEx.test(prenom);

    // date no need cuz it has <input type date>

    // ville
    const ville = document.getElementById("ville").value;
    const villeRegEx = /^[a-zA-Z]{2,30}$/;
    const villeVerif = villeRegEx.test(ville);

    // code postal
    const cp = document.getElementById("cp").value;
    const cpRegEx = /^[0-9]{5}$/;
    const cpVerif = cpRegEx.test(cp);

    // email
    const email = document.getElementById("email").value;
    const emailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const emailVerif = emailRegEx.test(email);




    if (!nomVerif) {
        document.getElementById("pnom").innerHTML = "Verifiez votre nom";
    }

    if (!prenomVerif) {
        document.getElementById("pprenom").innerHTML = "Verifiez votre prenom";
    }

    if (!villeVerif) {
        document.getElementById("pville").innerHTML = "Verifiez votre ville";
    }

    if (!cpVerif) {
        document.getElementById("pcp").innerHTML = "Verifiez votre code postale";
    }

    if (!emailVerif) {
        document.getElementById("pemail").innerHTML = "Verifiez votre adresse mail";
    }

}