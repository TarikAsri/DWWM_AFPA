var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stséphane"];

var requested_name = "";

//while (requested_name != "ZERDA") { // on peut utiliser un mot magique comme ça pour sortir du while. sinon ↓
while (tab[0] != "") { // on declare directement que le while va s'arreter le moment que il ya plus de prenom ←
    requested_name = prompt("Entrez le prénom recherché");
    var index_of_found_name = -1; //

// rechercher le prénom dans le tableau
for(i = 0; i < 10; i++) {
if (tab[i] == requested_name) { // == equivalent not === stick equality
index_of_found_name = i; // on a trouvé le prénom recherché | if this is ←
    break;                                                  // verified  ←
    }                                                                  //↑
}                                                                      //↑
                                                                       //↑
// remplacer tous les prénoms après l'index trouvé                       ↑
        if (index_of_found_name > -1) { // we move to this automatically ↑
          for(k = index_of_found_name; k < 9; k++) { // do not touch index!
            tab[k] = tab [k+1]; // cuz if you touch it you'll lose it!!!!
          }
          tab[9] = "" ; // cas particulier pour la denrière case car tab[k+1] n'existe pas si k=9
        } // all clear!

        // afficher le résultat
        for(i = 0; i < 10; i++) {
            console.log("number "+(i+1)+" : " +tab[i]+"\n");
        }
        console.log("- end -");
}
// start by doing the simple stuff 28/31 display the tableau, then look for things one by one - petit a petit
// search for the array 13/18, then 21/26 to know how to replace the names, then the while 8
// var m = 0;
// in this case the 0 can be == to false in a boolean, but not === because one is number and the other is boolean. === rarely used, sometimes necessary.