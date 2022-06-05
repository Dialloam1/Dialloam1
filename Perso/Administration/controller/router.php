<?php
include_once('view/connexion.php');

$page = @$_GET["page"];

switch ($page) {

    case 'accueil':
        include_once('adminController.php');
        $admin = new AdminController;
        if (isset($_POST['email'])) {
            $admin->connexion();
        } else {
            $admin->formConnexion();
        }
        break;

    case 'deconnexion':
        include('adminController.php');
        $admin = new AdminController;
        $admin->deconnexion();
        break;

    case 'Formations':
        include_once('formationsController.php');

        $formation = new FormationsController;
        $formation->afficheFormations();
        break;

        case 'mentionsLégales':
            include_once('view/mentions.php');
            break;
            
    default:
        include_once('adminController.php');

        $admin = new AdminController;

        if (isset($_POST['email'])) {
            $admin->connexion();
        } else {
            $admin->formConnexion();
        }
        break;
}
