<!--Fiche candidat-->

<form class="formInput" method="post" action="" onsubmit="return ficheCandidat()">
    <h3>Fiche Candidat</h3>
    <div>
        <section>

            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nom*</span>
                <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['nom_candidat'] ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Prénom*</span>
                <input type="text" name="prenom" class="form-control" placeholder="Entrez votre mot de prénom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['prenom_candidat'] ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Date de naissance*</span>
                <input type="text" name="dateDeNaissance" class="form-control" placeholder="aaaa-mm-jj" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['date_naissance'] ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nationalité*</span>
                <input type="text" name="nationalite" class="form-control" placeholder="Entrer votre nationalité" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['nationalite_candidat'] ?>">
            </div>
            <p>Genre*
                <select name="genre">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </p>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Téléphone portable*</span>
                <input type="tel" name="tel1" class="form-control" placeholder="votre n° de télép" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['tel_candidat'] ?>" minlength="10" maxlength="13">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"> Autre Téléphone</span>
                <input type="text" name="tel2" class="form-control" placeholder="votre n° de téléphone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= @$candidat['tel2_candidat'] ?>" minlength="10" maxlength="13">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"> Code INE/BEA</span>
                <input type="text" name="ine_bea" class="form-control" placeholder="votre n° de téléphone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= @$candidat['tel2_candidat'] ?>" minlength="10" maxlength="13">
            </div>
            <div>
                <label for="mdp"> Code INE/BEA</label>
                <input type="text" name="ine_bea" class="code" placeholder="entrez votre code" value="<?= @$candidat['ine_bea'] ?>">
            </div>
        </section>
        <section>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"> Adresse*</span>
                <input type="text" name="adresse1" class="form-control" placeholder="entrer votre adresse" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['adresse_candidat'] ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Complément d'adresse</span>
                <input type="text" name="adresse2" class="form-control" placeholder="entrer votre adresse" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['adresse2_candidat'] ?>">
            </div>

            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Cp*</span>
                <input type="text" name="cp" class="form-control" placeholder="entrer votre code postal" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= @$candidat['cp_candidat'] ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Ville*</span>
                <input type="text" name="ville" class="form-control" placeholder="entrer votre code postal" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="<?= @$candidat['ville_candidat'] ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Pays si autre que la France</span>
                <input type="text" name="pays" class="form-control" placeholder="FRANCE" value="<?= @$candidat['pays_candidat'] ?>">
            </div>

            <button type="submit">Enregistrer</button>
        </section>
    </div>
</form>