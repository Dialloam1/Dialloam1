<main>
    <!-- <h2> Accueil page Candidat / page connexion </h2>-->




    <form class="formInput" action="" method="post" onsubmit="return connexion()">
        <!-- modif le 19/05/22
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="email" placeholder="entrez votre email" required>
        </div>
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" class="mdp" placeholder="entrez votre mdp" minlength="8" required>
        </div> <br>
-->
        <h2>Connectez-vous</h2> <br>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="email" name="email" class="form-control" placeholder="Entrez votre email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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