<?php
include "config.php";

$projet_a_afficher = unProjet($_GET["projetAAfficher"]);

include PATH_TEMPLATE . "projet.php";
