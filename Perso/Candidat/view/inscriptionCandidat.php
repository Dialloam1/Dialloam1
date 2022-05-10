<h3>Etapes de la création compte</h3>
<!--page inscription-->
<ol>
    <li>Créez un compte en renseignant le formulaire ci dessous</li>
    <!--<li>Vous recevrez un email sur l'adresse que vous aurez indiquée</li>
    <li>Consultez votre messagerie, pour cliquer sur le lien de validation dans l'email recu.
        Attention : vous disposez d'un délai d'une heure pour cliquer sur le lien, au delà il faudra
        recommencer la procédure depuis l'étape 1
    </li>-->
    <li>Votre compte sera alors activé</li>
</ol> <br> <br>

<h3> Inscrivez-vous</h3> <br>
<style>
    input[type="submit"] {
        border: none;
        background-color: #EE6600;
        color: #FFFFFF;
        width: 200px;
        cursor: pointer;
    }
   
    .label {
        margin-bottom: 24px;
        font: 15pt arial;
        color: #AAAAAA;
    }

    .champ {
        margin-bottom: 20px;
    }
    
    .rappel {
        font: 10pt arial;
        color: #888888;
        background-color: #EEEEEE;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 10px;
    }
</style>

<form method="post" action="" onsubmit="return verifMdp()">

    <div class="label">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="entrez votre email" required>
    </div>

    <div class="label">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" placeholder="entrez votre mdp" minlength="8" required>
    </div>
    <div class="label">
        <label for="mdp2"> Confirmer le mot de passe</label>
        <input type="password" name="mdp2" id="mdp2" placeholder=" confirmer votre mdp" minlength="8" required>
    </div> 

    <h5>(Choisir un mot de passe d'au moins 8 caractères)</h5> <br>
    
    <button>Valider</button>
</form>