<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> navBar Candidat</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="../assets/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <!--<style>
        #acc {
            display: block;
            color: blue;
        }
    </style>
    -->
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" style="width: 200%;" href="#">CEFISI</a>
        <div class="container-fluid">


            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link" href="#">Accueil</a>
                    <a class="nav-link" href="#">Formations</a>
                    <a class="nav-link" href="#">Profil</a>
                    <a class="nav-link" href="#">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>
    <main>

        <form method="post" accept-charset="UTF-8">

            <input type="hidden" name="action" value="users/login">

            <h3><label for="loginName">Login</label></h3>
            <input id="loginName" type="text" name="loginName" placeholder=" votre adresse email ">

            <h3><label for="password">Mot de pass</label></h3>
            <input id="password" type="password" name="password" placeholder="votre mot de passe">
            <input type="submit" value="Connectez-vous">

            <p><a href=""> Mot de passe oublié ?</a></p>
        </form>
        </table>

        <div>
            <ul style="text-align: center;">
                <h3>Première connexion ?</h3>
                <li><a href="#"> Besoin d'aide? Consultez guide</a></li>
            </ul>
        </div>
        
    </main>
    <footer>
        <table id="acc">
            <tr>
                <td>Aides</td> <br> <br>
                <td>Mentions Légales</td>
            </tr>
        </table>
    </footer>
</body>

</html>