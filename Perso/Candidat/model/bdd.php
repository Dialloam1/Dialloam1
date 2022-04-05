<?php
class Bdd {
    public static function connexion(){

try {
    $bdd = new PDO("mysql:host=localhost;dbname=cefisi", "root",  "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection BDD OK" ;
} catch (Exception $e) {
    die("erreur de connexion à la bdd <br> $e"); // Bloque la suite du code si erreur !!
}}}