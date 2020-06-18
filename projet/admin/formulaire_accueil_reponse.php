<?php
// Cette page reçoit les informations du formulaire qui se trouve sur formulaire_accueil.php

include "../config.php";
var_dump($_POST);

proteger_page(); // on ne peut pas acceder à la page sans être connecté.
enregistreProjet("TITRE_ACCUEIL", $_POST['titre']);

if(!empty($_POST["titre"])) {

var_dump("rentre dans post");

  var_dump($_POST);

enregistreProjet("TITRE_ACCUEIL", $_POST["titre"]);

}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageAccueil"],  "images/vrac/accueil.jpg");
}

ajouterSuccess("Nous avons enregistré la page d'accueil");

changeDePage(PROJET_URL_SITE . "admin/accueil.php");
