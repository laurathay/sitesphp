<?php
include "config.php";

$projet_a_afficher = unProjet($_GET["menuAAfficher"]);

include PATH_TEMPLATE . "page_projet_du_jour.php";
