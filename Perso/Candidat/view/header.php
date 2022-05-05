<?php
include_once('./controller/navbarController.php');

$nav = new NavBarController;
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Candidat cefisi</title>
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    

</head>

<body>

    <header>
        <?php $nav->afficheNavBar(); ?>
    </header>