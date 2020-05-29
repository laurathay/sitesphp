<?php
session_start();

function verif_connexion(){
  if(empty($_SESSION["peut_se_connecter"])){
    header("location:login.php");
  }
}


 ?>
