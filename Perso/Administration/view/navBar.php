<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> navBar Administration</title>

    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CEFISI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Formations</a>
                    </li>
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </nav>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                            Gestion
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Campus</a></li>
                            <li><a class="dropdown-item" href="#">Administration</a></li>
                        </ul>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>