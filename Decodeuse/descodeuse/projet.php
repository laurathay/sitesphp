<?php
include "config.php";

$projet_a_afficher = unProjet($_GET["projetAAfficher"]);
var_dump($projet_a_afficher);

include PATH_TEMPLATE . "projet.php";
