<h2> Modifier mon compte</h2>

<form action="" method="post">
    <div>
        <label for="nom"> Nom</label>
        <input type="text" name="nom" id="nom" palceholder="votre nom" value="<?= $candidat['nom_candidat'] ?>">
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" palceholder="votre prénom" value="<?= $candidat['prenom_candidat'] ?>">
    </div>
    <div>
        <label for="email"> Email</label>
       <input type="email" name="email" id="email" placeholder="aba@gmail.fr" value="<?= $candidat['email_candidat'] ?>">
    </div>
    <div>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" placeholder="votre mot de passe">
    </div>
    <button type="button"> Valider</button>
</form>