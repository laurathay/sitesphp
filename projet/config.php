<?php
include "fonctions_utiles.php";

session_start();

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = 'root'; //toujours changer le mdp
$nomBaseDeDonnees = "formation_projet";


//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("PROJET_URL_SITE", "http://localhost:8888/projet/"); //l'url de base definit
define("PROJET_PATH_SITE", __DIR__ . "/"); //definit au cas ou si on rappelle plus tard le chemin

define("URL_TEMPLATE", PROJET_URL_SITE . "template/css/"); //le chemin pour le css template 2020
define("PATH_TEMPLATE", PROJET_PATH_SITE . "template/accueil.php"); //definit au cas ou on en a besoin

define("NOM_DU_PROJET", "Projet THAYTHAY");
define("TITLE", "Projet PHP portoflio THAYTHAY");
