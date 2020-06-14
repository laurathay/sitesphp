<?php

  unset($_SESSION["peut_se_connecter"]);
  //efface le contenu de la superglobal session, qui est touours sur toutes les pages
  // une fois supprimé elle revient sur la page de connexion du coup
  header("location:connexion.php");
  exit;
 ?>
