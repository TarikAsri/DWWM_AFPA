var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

var requested_name = "";

while (tab[0] != "") {
  var requested_name = prompt("Entrez le prénom recherché");
  var index_of_found_name = -1;
 
  // rechercher le prénom dans le tableau
  for(i = 0; i < 10; i++) {
      if (index_of_found_name == -1) {
          // on n'a pas encore trouvé le prénom
          if (tab[i] == requested_name) {
            index_of_found_name = i; // on a trouvé le prénom recherché
          }
      }
      if (index_of_found_name > -1) {
          // on a déjà trouvé le prénom, donc il faut remplacer tous les prénoms après l'index trouvé
          if (i == 9) {
            tab[i] = "";
          } else {
            tab[i] = tab [i+1];
          }
      }
  }
 
  // afficher le résultat
  for(i = 0; i < 10; i++) {
      console.log("number "+(i+1)+" : " +tab[i]+"\n");
  }
  console.log("- end -");
}