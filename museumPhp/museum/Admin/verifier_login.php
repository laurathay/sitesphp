<?php
session_start();
var_dump($_POST);
//login Descodeuse
// mdp PHP2020

if (

  // on verifie dabord que ca existe
  isset($_POST["identifiant"]) &&
  isset($_POST["mdp"]) &&
  $_POST["identifiant"] == "lol" &&
  $_POST["mdp"] == "lol" ){
  // je vais vers mon Site

    $_SESSION["peut_se_connecter"] = TRUE;

    header("location:admin.php");

} else {
  // je ne co pas
  header("location:login.php");
  echo "re essaie encore";
}
exit;

 ?>
