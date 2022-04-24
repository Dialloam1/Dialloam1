<h3>Etapes de la création compte</h3>
<!--inscription-->
<ol>
    <li>Créez un compte en renseignant le formulaire ci dessous</li>
    <li>Vous recevrez un email sur l'adresse que vous aurez indiquée</li>
    <li>Consultez votre messagerie, pour cliquer sur le lien de validation dans l'email recu.
        Attention : vous disposez d'un délai d'une heure pour cliquer sur le lien, au delà il faudra
        recommencer la procédure depuis l'étape 1
    </li>
    <li>Votre compte sera alors activé</li>
</ol> <br> <br>

<h3> Inscrivez-vous</h3> <br>

<form action="" method="post">

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="entrez votre email" required>
    </div>

    <div>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" placeholder="entrez votre mdp" minlength="8" required>
    </div> <br>
    <div>
        <label for="mdp"> Confirmer le mot de passe</label>
        <input type="password" name="mdp" id="mdp2" placeholder=" confirmer votre mdp" minlength="8" required>
    </div> <br>

    <h4>Choisir un mot de passe d'au moins 8 caractères</h4> <br>
    <div>
        <button type="button"> Valider </button>
        <!--<button type="button" onclick="verifMdp();"> Valider </button>-->
    </div>
</form>