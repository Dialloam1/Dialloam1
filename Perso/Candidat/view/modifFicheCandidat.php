<h3>Fiche Candidat</h3>

<form method="post" action="" onsubmit="return ficheCandidat()">
    <section>
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="nom" placeholder="entrez votre nom" required value="<?= @$candidat['nom_candidat'] ?>"><br>
            <label for="prenom">Prénom</label> 
            <input type="text" name="prenom" class="prenom" placeholder="entrez votre prenom" required value="<?= @$candidat['prenom_candidat'] ?>">
        </div>

        <div>
            <label for="dateDeNaissance">Date de naissance</label>
            <input type="text" name="dateDeNaissance" class="naissance" placeholder="aaaa-mm-jj" required value="<?= @$candidat['date_naissance'] ?>">
        </div>
        <div>
            <label for="nationalite">Nationalité</label>
            <input type="text" name="nationalite" class="nationalite" placeholder="entrez votre nationalité" required value="<?= @$candidat['nationalite_candidat'] ?>">
        </div> <br>
        <p>Genre
            <select name="genre">
                <option value="masculin">Homme</option>
                <option value="feminin">Femme</option>
            </select>
        </p>

        <div>
            <label for="tel1">Tel portable</label>
            <input type="text" name="tel1" class="tel1" placeholder="entrez votre tel" required value="<?= @$candidat['tel_candidat'] ?>" maxlength="12">
        </div>

        <div>
            <label for="tel2">Autre téléphone</label>
            <input type="text" name="tel2" class="tel2" placeholder="entrez votre tel2" value="<?= @$candidat['tel2_candidat'] ?>" maxlength="12">
        </div>
    </section>
    <section>
        <div>
            <label for="mdp"> Code INE/BEA</label>
            <input type="text" name="ine_bea" class="code" placeholder="entrez votre code" value="<?= @$candidat['ine_bea'] ?>">
        </div>

        <div>
            <label for="adresse1">Adresse</label>
            <input type="text" name="adresse1" class="adresse1" placeholder="entrez votre adresse" required value="<?= @$candidat['adresse_candidat'] ?>">
        </div>

        <div>
            <label for="adresse2">Complément adresse</label>
            <input type="text" name="adresse2" class="adresse2" placeholder="complement adresse" value="<?= @$candidat['adresse2_candidat'] ?>">
        </div>

        <div>
            <label for="cp">Code postal</label>
            <input type="text" name="cp" class="cp" placeholder="entrez votre cp" required value="<?= @$candidat['cp_candidat'] ?>">
        </div>
        <div>
            <label for="ville"> Ville</label>
            <input type="text" name="ville" class="ville" placeholder="ville" required value="<?= @$candidat['ville_candidat'] ?>">
        </div>

        <div>
            <label for="autrePays?"> Pays si autre que France</label>
            <input type="text" name="pays" class="pays" placeholder="FRANCE" value="<?= @$candidat['pays_candidat'] ?>">
        </div>

        <button type="submit">Enregistrer</button>

    </section>
</form>