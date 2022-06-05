<main>
    <!-- <h2> Accueil page Candidat / page connexion/inscription </h2>-->
    <form class="formInput" action="" method="post" onsubmit="return connexion()">

        <h3>Connectez-vous !</h3>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="email" name="email" class="form-control email" placeholder="Entrez votre email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="8">
        </div>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Mot de passe</span>
            <input type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <button type="submit"> Se connecter</button> <br> <br> <br>
    </form>

    <div class="centre">
        <h3>Première connexion ?</h3>
        <button><a href="?page=creerCompte">Créer un compte </a></button> <br> <br>
        <!--<h3>Voir les formations</h3>-->
        <button> <a href="?page=listeDesFormations">Liste des formations </a></button>
    </div>

</main>