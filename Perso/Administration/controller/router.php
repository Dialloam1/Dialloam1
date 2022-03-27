<?php
$page = @$_GET["page"];

switch ($page) {
    case 'accueil':
        include_once("pages/accueil.php");
        break;
    case 'formation':
        include_once("pages/formation.php");
        break;
    case 'contact':
        include_once("pages/contact.php");
        break;
    default:
        include_once("pages/accueil.php");
        break;
}
