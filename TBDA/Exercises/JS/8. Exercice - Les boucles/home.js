window.prompt("Invite de script :\nSaisissez le prénom N°1\nOu Clic sur Annuler pour arrêter le saisie.");
window.prompt()


// exercice 5 : les voyelles a e i o u y

var mot = window.prompt("Entrer un mot");
var N = 0;
var voytr="";
var voyelle = ['a', 'e', 'i', 'o', 'u', 'y']
var consonnes

for(var i =0; i<mot.length; i++){
    var lettre = mot.substr(i,1);

    if(voyelle.indexOf(lettre)>=0){

     voytr += mot[i] +','
        N++
    }
   
consonnes = mot.length - N;
}

document.write("dans "+ mot + " j'ai trouvé " +N+ " voyelle qui sont "+voytr+"  et " +consonnes+ " consonnes")