<h3>Fiche Candidat</h3>
<style>
        button[type="submit"] {
            border: none;
            background-color: #EE6600;
            color: #FFFFFF;
            width: 200px;
            cursor: pointer;
        }
    </style>

<form method="post" action="" onsubmit="return ficheCandidat()">


    <section>
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="nom" placeholder="entrez votre nom" required> <br>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="prenom" placeholder="entrez votre prenom" required>
        </div>

        <div>
            <label for="dateDeNaissance">Date de naissance</label>
            <input type="text" name="dateDeNaissance" class="naissance" placeholder="aaaa-mm-jj" required>
        </div> 
        <div>
            <label for="nationalite">Nationalité</label>
            <input type="text" name="nationalite" class="nationalite" placeholder="entrez votre nationalité" required>
        </div> <br>
        <div class="champ">
            <label for="Genre">Genre :</label>
            Homme <input type="radio" name="genre" class="H">
            Femme <input type="radio" name="genre" class="F">

        </div> 

        <div>
            <label for="tel">Tel portable</label>
            <input type="text" name="tel1" class="tel1" placeholder="entrez votre tel" required>
        </div>

        <div>
            <label for="tel">Autre téléphone</label>
            <input type="text" name="tel2" class="tel2" placeholder="entrez votre tel2">
        </div> 
    </section>
    <section>
        <div>
            <label for="mdp"> Code INE/BEA</label>
            <input type="text" name="ine_bea" class="code" placeholder="entrez votre code">
        </div> 

        <div>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse1" class="adresse1" placeholder="entrez votre adresse" required>
        </div>

        <div>
            <label for="adresse">Complément adresse</label>
            <input type="text" name="adresse2" class="adresse2" placeholder="complement adresse">
        </div>

        <div>
            <label for="cp">Code postal</label>
            <input type="text" name="cp" class="cp" placeholder="entrez votre cp" required>
        </div> 
        <div>
            <label for="ville"> Ville</label>
            <input type="text" name="ville" class="ville" placeholder="ville" required>
        </div>

        <div>
            <label for="autrePays?"> Pays si autre que France</label>
            <input type="text" name="pays" class="pays" placeholder="FRANCE">
        </div> 
        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </section>
</form>