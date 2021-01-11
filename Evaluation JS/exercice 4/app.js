
let prixUnitaire = prompt("Entrez le prix unitaire");
let quantiteCommande = prompt("Entre quantité de la commande");
let totale = prixUnitaire * quantiteCommande;

let fraisPort = .02;
let remise = 0;
let pAp = 0;
let fraisEuro = 0;
let remiseValeur = 0;
let totalApayer = 0;

if(prixUnitaire == 0 || prixUnitaire < 0) { // pour etre sur que le programme n'accepte que des valeurs valide
    alert("Le prix unitaire saisi n'est pas valide, veuillez essayer a nouveau.");
} else if (prixUnitaire > 0) {
    if (quantiteCommande == 0 || quantiteCommande < 0) { // pour etre sur que le programme n'accepte que des valeurs valide
        alert("La quantité de commande saisi n'est pas valide, veuillez essayer a nouveau.");
    } else if (quantiteCommande > 0) { // calculer la remise  
        if (totale >= 100 && totale <= 200) {
            remise = .05;
        } else if (totale > 200 && totale < 500) {
            remise = 0.1;
        } else if (totale >= 500) {
            remise = 0.1;
            fraisPort = 0; 
        } 
        
        if (fraisPort != 0) { // maintenant pour le port 
            fraisEuro = totalApayer * fraisPort;
        if (fraisEuro < 6 && fraisPort == .02) {
                fraisEuro = 6;
            }
            
        } else {
            fraisPortValeur = 0;
        }
        remiseValeur = totale * remise;
        totalApayer = totale - remiseValeur;

        pAp = totalApayer + fraisEuro;

        //console.log(remiseValeur, prixAvecRemise, fraisPortValeur);
        document.write("Votre commande de " + totale.toFixed(2) + " à droit a une remise de " + remiseValeur.toFixed(2) + "€. Soit " + totalApayer.toFixed(2) + ".<BR/> Frais de port : soit " + fraisEuro.toFixed(2) + "€.<BR/> Votre totale est de " + pAp + "€.");
    }
}


        