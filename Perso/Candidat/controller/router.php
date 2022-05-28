<?php

$page = @$_GET["page"];

switch ($page) {

    case 'accueil':
        include_once('candidatController.php');
        $candidat = new CandidatController;
        if (isset($_POST['email'])) {
            $candidat->connexion();
        } else {
            $candidat->formConnexion();
        }
        break;

    case 'creerCompte':
        include_once('candidatController.php');
        $candidat = new CandidatController;
        if (isset($_POST['email'])) {
            $candidat->inscriptionCandidat();
        } else {
            $candidat->formInscriptionCandidat();
        }
        break;

    case 'deconnexion':
        include('candidatController.php');
        $candidat = new CandidatController;
        $candidat->deconnexion();
        break;

    case 'ficheCandidat':
        include_once('candidatController.php');
        $candidat = new CandidatController;
        if (isset($_POST['nom'])) {
            $candidat->ficheCandidat();
        } else {
            $candidat->formFicheCandidat();
        }
        break;

    case 'monCompte':
        include_once('candidatController.php');
        $candidat = new CandidatController;
        $candidat->monCompte();
        break;

    case 'listeDesFormations':
        include_once('formationsController.php');

        $formation = new FormationsController;
        $formation->afficheFormations();
        break;

    case 'modifierMonCompte':
        include('CandidatController.php');
        $candidat = new CandidatController;

        if (isset($_POST['email'])) {
            $candidat->modifierMonCompte();
        } else {
            $candidat->formMonCompte();
        }
        break;

    default:
        include_once('candidatController.php');

        $candidat = new CandidatController;

        if (isset($_POST['email'])) {
            $candidat->connexion();
        } else {
            $candidat->formConnexion();
        }
        break;
}
