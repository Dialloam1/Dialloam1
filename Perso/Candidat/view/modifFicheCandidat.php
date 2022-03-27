<h3>Modifier Fiche Candidat</h3>
<form action="" method="post" class="container-sm">


    <div>
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="entrez votre nom"> <br>
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="entrez votre prenom">
    </div>

    <div>
        <label for="dateDeNaissance" class="form-label">Date de naissance</label>
        <input type="text" class="form-control" name="dateDeNaissance" id="naiss" placeholder="aaaa-mm-jj">
    </div> <br>

    <div>
        <label for="nom" class="form-label">Genre :</label>
        Homme <input type="radio" class="form-control" name="genre" id="H">
        Femme <input type="radio" class="form-control" name="genre" id="F">
    </div> <br>

    <div>
        <label for="tel" class="form-label">Tel portable</label>
        <input type="number" class="form-control" name="tel" id="tel1" placeholder="entrez votre tel">
    </div>

    <div>
        <label for="email" class="form-label">Autre téléphone</label>
        <input type="number" class="form-control" name="tel2" id="tel2" placeholder="entrez votre tel">
    </div> <br>

    <div>
        <label for="mdp" class="form-label"> Code INE/BEA</label>
        <input type="text" class="form-control" name="code" id="code" placeholder="entrez votre code">
    </div> <br>

    <div>
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" name="adresse" id="adresse1" placeholder="entrez votre adresse">
    </div>

    <div>
        <label for="adresse" class="form-label">Complément adresse</label>
        <input type="text" class="form-control" name="adresse" id="adresse2" placeholder="complement adresse">
    </div>

    <div>
        <label for="cp" class="form-label">Code postal</label>
        <input type="cp" class="form-control" name="cp" id="cp" placeholder="entrez votre cp">
    </div> <br>
    <div>
        <label for="ville" class="form-label"> Ville</label>
        <input type="text" class="form-control" name="ville" id="ville" placeholder="ville">
    </div>

    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01"> Pays si autre que France</label>
        <input type="ville" class="form-control" name="ville" id="cp" placeholder="FRANCE">

        <!--<select class="form-select" id="inputGroupSelect01">
            <option value="1">Pays</option>
            <option value="1">Espagne</option>
            <option value="2">Italie</option>
            <option value="3">Pologne</option>
        </select>-->
    </div> <br>
    <div>
        <button type="submit" class="btn btn-primary mb-3">Enregistrer</button>
    </div>
</form>