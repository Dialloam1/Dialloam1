<main>
    <!-- <h2> Accueil page Candidat / page connexion </h2>-->

    <h2>Connectez-vous</h2> <br>
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
            <button type="submit" onclick="verifMdp();">Se connecter</button>
        </div> <br> <br>
      </form>

        <div>
            <h3>Première connexion ?</h3>
            <button a href="?page=inscriptionCandidat"> Créer un compte</button>
        </div> <br> <br>

        <div>
            <button a href="?page=listeDesFormations">Liste des formations</button>
        </div>
    
</main>