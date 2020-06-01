<?php
session_start();

$nom_du_musee = "ThayThay";

$_dossier_template = "templates/site2020/"; // repertoire dans lequel j'ai mis l'ensemble des gabarits de mon site

$_url_base = "http://localhost:8888/museumPhp/museum/";

function verif_connexion(){

	  if (empty($_SESSION["peut_se_connecter"])) { //si la connection n'est pas validé
    header("location:login.php"); // elle renvoie a la page login
  }
}
