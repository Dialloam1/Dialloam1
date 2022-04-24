function verifForm(type, valeur) {
  let result = false;
  switch (type) {
    case "nom":
    case "prenom":
      result = preg_match("/^[a-zA-Z '-]+$/".test(valeur));
      break;
    case "email":
      result = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(valeur);
      break;
    case "mdp":
      result = /^[a-zA-Z'!?,;0-9._-]{}$/.test(valeur);
      break;
  }
  return result;
}

function verifMdp() {
  let mpass1 = document.getElementById("mdp").value;
  let mpass2 = document.getElementById("mdp2").value;

  if (mpass1 == " ") {
    alert("merci d'entrer votre mot de passe");
    return false;
  }
  
  if (mpass1 !== mpass2) {
    alert("veuillez retaper un mot de passe identique");
    return false;
  }
  if (mpass1 == mpass2) {
    alert("vous êtes connecté");
    return true;
  }

  if (verifForm && verifMdp) {
    alert("Vous pouvez maintenant compléter votre fiche candidature");
    return true;
  } else {
    alert("demande incomplète,inscription rejetée");
    return false;
  }
  return true;
}
