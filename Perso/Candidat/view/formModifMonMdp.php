<h3>Modifier mot de passe de </h3>

<form class="formInput" action="" method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $email['email_candidat'] ?>" placeholder="entrez votre email">
    </div>
    <div>
        <label for="password">le nouveau mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="<?= $mdp['mdp_candidat'] ?>" placeholder="Saisir le nouveau mdp" required>
    </div>
    <div>
        <label for="password">Confirmer le mot de passe</label>
        <input type="password" name="mdp2" id="mdp2" value="<?= $mdp['mdp_candidat'] ?>" placeholder="Saisir pour vérification">
    </div>

    <button type="button">Valider</button>
</form>

