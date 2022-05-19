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
           
        }
        footer {
            height: 2rem;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 0;
            text-align: center;
        }
        footer>:hover {
            background-color: white;
        }
    </style>

    <form action="" method="post" onsubmit="return connexion()">

        <div class="label">
            <label for="email">Email</label>
            <input type="email" name="email" class="email" placeholder="entrez votre email" required>
        </div>

        <div class="label">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" class="mdp" placeholder="entrez votre mdp" minlength="8" required>
        </div>

        <button type="submit"> Se connecter</button>

    </form>

    <div>
        <h3>Première connexion ?</h3>
        <a href="?page=creerCompte">Créer un compte </a>
        <!--<button type="submit">Créer un compte</button>-->
    </div> <br> <br>

    <div>
        <a href="?page=listeDesFormations">Liste des formations </a>
    </div>

</main>