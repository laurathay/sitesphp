<?php
session_start();
var_dump($_POST);
//login Descodeuse
// mdp PHP2020


//on verifie qu'il n'y ait pas derreur
$nomChampsObligatoires = array("email", "mdp");

foreach ($nomChampsObligatoires as $nomChamp) {
  if(empty($_POST[$nomChamp])){
    $_SESSION ["err"] = "champ";
    $_SESSION["champ_error"] = $nomChamp;

    header("location:login.php");
    exit;
  }
}




//maintenant on redirige
if (
  $_POST["identifiant"] == "lol" &&
  $_POST["mdp"] == "lol" ){
  // je vais vers mon Site

    $_SESSION["peut_se_connecter"] = TRUE;

    header("location:admin.php");

} else { 
  $_SESSION['err'] = "identification";
  header("location:login.php");
}
exit;

// $nomChampsObligatoires = array'"email", "mdp");

//foreach ($nomChampsObligatoires as $nomChamp ) {

//}

 ?>
