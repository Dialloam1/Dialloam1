<?php

$page = @$_GET["page"];

switch ($page) {

    case 'accueil':
        include_once('candidatController.php');
        $candidat = new CandidatController;
        if (isset($_POST['email_candidat'])) {
            $candidat->connexion();
        } else {
            $candidat->formCreerCompte();
        }
        break;

    case 'creerCompte':
        include_once('candidatController.php');
        $candidat = new CandidatController;
        if (isset($_POST['email_candidat'])) {
            $candidat->creerCompte();
        } else {
            $candidat->formCreerCompte();
        }
        break;

    case 'connexion':
        include('candidatController.php');
        $candidat = new CandidatController;

        if (isset($_POST['email'])) {
            $candidat->connexion();
        } else {
            $candidat->formConnexion();
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
        if (isset($_POST['email_candidat'])) {
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

    case 'modifierMonCompte':
        include('CandidatController.php');
        $candidat = new CandidatController;

        if (isset($_POST['email_candidat'])) {
            $candidat->modifierMonCompte();
        } else {
            $candidat->formMonCompte();
        }
        break;

    default:
        include_once('candidatController.php');
        $candidat = new CandidatController;
        if (isset($_POST['email_candidat'])) {
            $candidat->connexion();
        }
        break;
}
