<?php
session_start();

//login Admin
// mdp ADMIN2020

if(
  // on verifie dabord que ca existe
  isset($_POST["identifiant"]) &&
  isset($_POST["mdp"]) &&
  $_POST["identifiant"] == "Admin" &&
  $_POST["mdp"] == "ADMIN2020" ){
  // je vais vers mon Site

    $_SESSION["peut_se_connecter"] = TRUE;

    header("location:http://localhost:8888/jour8/resto/admin/admin.php");
    exit;

} else {
  // je ne co pas
  header("location:login.php");
}

 ?>
