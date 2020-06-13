<?php
session_start();
/*var_dump($_POST);*/

//on verifie qu'il n'y ait pas derreur
$nomChampsObligatoires = array("login", "mdp");

foreach ($nomChampsObligatoires as $nomChamp) {
  if(empty($_POST[$nomChamp])){
    $_SESSION ["err"] = "champ";
    $_SESSION["champ_error"] = $nomChamp;

    header("location:connexion.php");
    exit;
  }
}


//maintenant on redirige
if (
  $_POST["identifiant"] == "Projet" &&
  $_POST["mdp"] == "projet" ){
  // je vais vers mon Site

    $_SESSION["peut_se_connecter"] = TRUE;

    header("location:accueil.php");

} else {
  $_SESSION['err'] = "identification";
  header("location:connexion.php");
}
exit;



 ?>
