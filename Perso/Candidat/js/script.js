function verifForm(type, valeur) {
  let result = false;
  switch (type) {
    case "nom":
    case "prenom":
      result = preg_match("/^[a-zA-Z '-]+$/".test(nom, prenom));
      break;
    case "email":
      result = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);
      break;
    case "mdp":
      result = /^[a-zA-Z'!?,;0-9._-]{}$/.test(mdp);
      break;
      case "tel1":
       /**result = /^[0-12+]$/.test(valeur);
       result = /^\d{10}$/;*/
       result = /^[1-9]{1}[0-9]{8}$/.test(tel1);
break;
  }
  return result;
}

function verifMdp() {
  let mpass1 = document.getElementById("mdp").value;
  let mpass2 = document.getElementById("mdp2").value;
  let input = document.querySelector("input");

  if (mpass1 == "") {
    alert("merci de renseigner votre mot de passe");
    input.backgroundColor = "red";
    return false;
  } else {
    if (mpass1 === mpass2) {
      return true;
    } else {
      alert("veuillez retaper un mot de passe identique");
      input.backgroundColor = "red";
      return false;
    }
  }
}

function connexion() {
  let email = document.querySelector(".email").value;
  
  if (email == "") {
    alert("merci de renseigner votre email");
   
    return false;
  }
}
