<h2> Modifier mon compte</h2>

<form class="formInput" method="post" action="modifierMonCompte()">
    <div>
        <label for="nom"> Nom</label>
        <input type="text" name="nom" id="nom" palceholder="votre nom" value="<?= $candidat['nom_candidat'] ?>" required>
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" palceholder="votre prénom" value="<?= $candidat['prenom_candidat'] ?>" required>
    </div>
    <div>
        <label for="email"> Email</label>
        <input type="email" name="email" id="email" placeholder="aba@gmail.fr" value="<?= $candidat['email_candidat'] ?>" required>
    </div>
    <div>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" placeholder="votre mot de passe" required minlength="8">
    </div>
    <button type="submit"> Valider</button>
</form>