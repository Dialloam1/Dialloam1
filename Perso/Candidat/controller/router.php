<?php

$page = @$_GET["page"];

switch ($page) {
    case 'accueil':
        include_once("view/inscriptionCdtConnecte.php");
        break;
    case 'formation':
        include_once("view/formation.php");
        break;
    case 'fiche':
        include_once("view/modifFicheCandidat.php");
        break;
    default:
        include_once("view/inscriptionCdtConnecte.php");
        break;
}
