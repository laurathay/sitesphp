<?php

  session_start();
  if (empty($_SESSION["peut_se_connecter"])) { //si la connection n'est pas validé
    header("location:login.php") // elle renvoie a la page login 
  }

 ?>


<h1> Bienvenue sur la page admin </h1>
