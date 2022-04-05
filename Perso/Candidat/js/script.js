// validation login
function validate() {
  var nom = document.getElementById("nom_candidat").value;
  var mdp = document.getElementById("mdp_candidat").value;
  if (nom=="candidat"&& mdp=="diallo")
   {
    alert("vous êtes connecté !");
    return false;
  }else{
      alert("erreur connexion");
  }
}

/**
 * function verifForm()
{
    $email=$_POST['email_candidat'];
    $mdp=$_POST['mdp_candidat'];
    $mdp2=$_POST['mdp2_candidat'];
     
if ($email==""){
    echo "ok";
}else {
    echo "<div style='color:red'>email : non conforme </div>";
}
if ($mdp=="" && $mdp2==""||$mdp==$mdp2){
   echo "ok";
}else {
    echo "<div style='color:red'>mdp : non conforme </div>";
}
}
verifForm();
?>
 */