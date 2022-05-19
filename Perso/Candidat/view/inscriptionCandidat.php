<h3>Etapes de la création compte</h3>
<!--page inscription-->
<ol>
    <li>Créez un compte en renseignant le formulaire ci dessous</li>
    <li>Vous recevrez un email sur l'adresse que vous aurez indiquée</li>
    <li>Consultez votre messagerie, pour cliquer sur le lien de validation dans l'email recu.
    </li>
    <li>Votre compte sera alors activé</li>
</ol> <br> <br>
<div class="centrer">
    <h3> Inscrivez-vous</h3> <br>

    <form class="formInput" method="post" action="?page=creerCompte" onsubmit="return verifMdp()">
        <!--
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="entrez votre email" required>
    </div>
    <div>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" placeholder="entrez votre mdp" minlength="8" required>
    </div>
    <div>
        <label for="mdp2"> Confirmer le mot de passe</label>
        <input type="password" name="mdp2" id="mdp2" placeholder=" confirmez votre mdp" minlength="8" required>
    </div>
-->
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="email" name="email" class="form-control" placeholder="Entrez votre email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Mot de passe</span>
            <input type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="8" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Confirmer le mot de passe</span>
            <input type="password" name="mdp2" class="form-control" placeholder="Confirmez votre mot de passe" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="8" required>
        </div>
        <h5>(Choisir un mot de passe d'au moins 8 caractères)</h5> <br>

        <button type="submit">Valider</button>
</div>
</form>