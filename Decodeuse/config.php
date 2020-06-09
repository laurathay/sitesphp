<?php
include "fonctions_utiles.php";
include "fonctions_contenu_front.php";

session_start();

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = 'root'; //toujours changer le mdp
$nomBaseDeDonnees = "formation_decodeuse";


//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("RESTO_URL_SITE", "http://localhost:8888/Decodeuse/"); //l'url de base definit
define("RESTO_PATH_SITE", __DIR__ . "/"); //definit au cas ou si on rappelle plus tard le chemin

define("URL_TEMPLATE", RESTO_URL_SITE . "template/site2020/"); //le chemin pour le css template 2020
define("PATH_TEMPLATE", RESTO_PATH_SITE . "template/site2020/"); //definit au cas ou on en a besoin

define("NOM_DU_RESTO", "Decodeuse");
