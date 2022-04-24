<h3>Fiche Candidat</h3>
<!-- en même temps fiche complète candidat à compléter-->

<form action="log" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="entrez votre nom" required> <br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="entrez votre prenom" required>
    </div>

    <div>
        <label for="dateDeNaissance">Date de naissance</label>
        <input type="text" name="dateDeNaissance" id="naiss" placeholder="aaaa-mm-jj" required>
    </div> <br>
    <div>
        <label for="nationNalite">Nationalité</label>
        <input type="text" name="nationalite" id="nationalite" placeholder="entrez votre nationalité" required>
    </div> <br>
    <div>
        <label for="Genre">Genre :</label>
        Homme <input type="radio" name="genre" id="H">
        Femme <input type="radio" name="genre" id="F">
    </div> <br>

    <div>
        <label for="tel">Tel portable</label>
        <input type="text" name="tel1" id="tel1" placeholder="entrez votre tel">
    </div>

    <div>
        <label for="tel">Autre téléphone</label>
        <input type="text" name="tel2" id="tel2" placeholder="entrez votre tel2">
    </div> <br>

    <div>
        <label for="mdp"> Code INE/BEA</label>
        <input type="text" name="code" id="code" placeholder="entrez votre code">
    </div> <br>

    <div>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse1" id="adresse1" placeholder="entrez votre adresse" required>
    </div>

    <div>
        <label for="adresse">Complément adresse</label>
        <input type="text" name="adresse2" id="adresse2" placeholder="complement adresse">
    </div>

    <div>
        <label for="cp">Code postal</label>
        <input type="text" name="cp" id="cp" placeholder="entrez votre cp" required>
    </div> <br>
    <div>
        <label for="ville"> Ville</label>
        <input type="text" name="ville" id="ville" placeholder="ville" required>
    </div>

    <div>
        <label for="autrePays?"> Pays si autre que France</label>
        <input type="text" name="pays" id="pays" placeholder="FRANCE">
    </div> <br>
    <div>
        <button type="submit" a href="?page=modifFicheCandidat">Enregistrer</button>
    </div>
</form>