
verifForm();

function inscription(){
    // recupère l'objet de formulaire
    var monForm = document.forms['monFormulaire'];

// recupere l'objet du nom
   var nom = monForm['nom'];

// recupere l'ojet  du prenom

   var prenom = monForm['prenom'];
   if(nom.value == ''){
     nom.style.backgroundColor = "red";
 }
   if (prenom.value == ''){
    prenom.style.backgroundColor = "red";
}

//alert(nom + " " + prenom);

   return false;
}