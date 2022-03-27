<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion administration</title>
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="assets/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-green">
            <div class="container-fluid">
                <a class="navbar-brand" style="width: 800px " href="#">CEFISI</a>
            </div>

    </header>
    <main>
        <h2>Connexion</h2>
        <form action="" method="post" class="container-sm">

            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="entrez votre email">
            </div>

            <div>
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="entrez votre mdp">
            </div> <br>

            <div>
                <button type="submit" class="btn btn-primary mb-3">Se connecter</button>
            </div>
        </form>

    </main>
</body>

</html>