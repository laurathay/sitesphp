<?php

session_start();

$prenom = array("Alix", "Aycha", "Céline", "Charlotte", "Delphine", "Françoise", "Laura", "Lynda", "Nassima", "Paloma", "Sarah", "Silvia", "Sophie", "Soraya", "Vanessa");


$_SESSION["descodeuse_au_hasard"] = $prenom[array_rand($prenom)];
header("location:prenom.php");
exit;


 ?>
