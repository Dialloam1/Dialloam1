<main>
    <!-- <h2> Accueil page Candidat / page connexion </h2>-->

    <h2>Connectez-vous</h2> <br>
    <style>
        button[type="submit"] {
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
    </style>

    <form action="" method="post">

        <div class="label">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="entrez votre email" required>
        </div>

        <div class="label">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="entrez votre mdp" minlength="8" required>
        </div> <br>

        <div class="champ">
            <button type="submit" onclick="verifMdp();">Se connecter</button>
        </div> <br> <br>
    </form>

    <div>
        <h3>Première connexion ?</h3>
        <a href="?page=creerCompte"> <button type="submit">Créer un compte</button> </a>
        <!--<button type="submit">Créer un compte</button>-->
    </div> <br> <br>

    <div>
        <a href="?page=listeDesFormations">Liste des formations </a>
    </div>

</main>