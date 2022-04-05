<main>
   <!-- <h2>Connexion Accueil Candidat</h2>-->
 <h2>Pour vous authentifier, merci de rentrer votre adresse email et le mot de passe</h2>
    <form action="" method="post" class="container-sm">

        <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="entrez votre email">
        </div>

        <div>
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="entrez votre mdp">
        </div> <br>

        <div>
            <button type="submit" class="btn btn-primary mb-3">Se connecter</button>
        </div>
    </form>

</main>
<h1>incription</h1>
<?php
function verifForm()
{
    $nom =$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
     
if ($nom =="nom"){
    echo "ok";
}else {
    echo "<div style='color:red'>nom : incorrect </div>";
}
if($prenom=="prenom"){
    echo "ok";
}else {
    echo "ko";
}
if ($email=="email"){
    echo "ok";
}else {
    echo "ko";
}
if ($mdp=="mdp"){
   echo "ok";
}else {
    echo "ko";
}
}
verifForm();
?>

