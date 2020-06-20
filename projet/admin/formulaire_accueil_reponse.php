<?php
// Cette page reçoit les informations du formulaire qui se trouve sur formulaire_accueil.php

include "../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.


if(!empty($_POST["titre"])) {


  enregistreProjet($_POST['titre'],$_POST['texteAccueil']);
}

if(!empty($_POST["techno"])) {
  enregistreTechno($_POST['techno']);
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageAccueil"],  "images/vracs/0.jpg");
}

ajouterSuccess("Nous avons enregistré la page d'accueil");

changeDePage(PROJET_URL_SITE . "admin/accueil.php");
