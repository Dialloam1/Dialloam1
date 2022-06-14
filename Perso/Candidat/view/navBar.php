<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CEFISI</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"><?php if (@$_SESSION['id_candidat']) { ?>
                <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#"><?=$_SESSION['nom_candidat']?> <?=$_SESSION['prenom_candidat']?></a>
                    </li>
          
                <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php?page=listeDesFormations">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="?page=ficheCandidat">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="?page=deconnexion">Deconnexion</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=creerCompte">Inscription</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=connexion">Connexion</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>