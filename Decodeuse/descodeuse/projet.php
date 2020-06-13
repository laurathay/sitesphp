<?php
include "config.php";
var_dump($_GET);
$projet_a_afficher = unProjet($_GET["id_projet"]);

include PATH_TEMPLATE . "projet.php";
