<?php

//$email = "dialloam5@aa.com";
/**$email = "email";
function veriEmail($email)
{
if(preg_match("/[a-zA-Z0-9.-]+@[a-z0-9.-]{2,}\.[a-zA-Z]{2,4}/",$email)){
    return true;
}else {
   return false;
}
}
//if (veriEmail("dialloam5@aa.com"))
if (veriEmail("email"))
{
  echo "ok";
} else {
   echo "error";
}

echo "<br>";

if(veriEmail($email)){
    echo "ok";
}else {
    echo "error";
}
*/
?>
<?php
   @$genre=$_POST["genre"];
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$email=$_POST["email"];
   @$pass=$_POST["mdp"];
   @$repass=$_POST["mdp2"];
   @$valider=$_POST["valider"];
   
   if(isset($valider)){
      if(empty($nom))
         $message='<div class="erreur">Nom laissé vide.</div>';
      elseif(empty($prenom))
         $message='<div class="erreur">Prénom laissé vide.</div>';
      elseif(empty($email))
         $message='<div class="erreur">Email laissé vide.</div>';
      elseif(empty($mdp))
         $message='<div class="erreur">Mot de passe laissé vide.</div>';
      elseif($pass!=$mdp2)
         $message='<div class="erreur">Les mots de passe ne sont pas identiques.</div>';
      else{
         $message='<div class="rappel"><b>Rappel:</b><br />';
         $message.=$genre.' '.ucfirst(strtolower($prenom)).' '.strtoupper($nom).'<br />';
         $message.='email: '.$email;
         $message.='</div>';
      }
   }

?>