<h3>Modifier mot de passe de </h3>

<form action="" method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $email['email'] ?>" placeholder="entrez votre email">
    </div>
    <div>
        <label for="password">le nouveau mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="<?= $mdp['mdp'] ?>" placeholder="Saisir le nouveau mdp">
    </div>
    <div>
        <label for="password">Confirmer le mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="<?= $mdp2['mdp'] ?>" placeholder="Saisir pour vérification">
    </div>

    <button>Valider</button>
</form>

