<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CEFISI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav">
            <?php if (@$_SESSION['id_candidat']) { ?>


                <li> <a href="?page=inscriptionCandidat"> Accueil candidat</a></li>

                <li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=listeDesFormations">Formations</a>
                <li class="nav-item"><a class="nav-link" href="?page=ficheCandidat">Profil</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="?page=deconnexion">Déconnexion</a></li>

                </li>
            <?php } else { ?>

            <?php } ?>
        </ul>

    </div>
</nav>