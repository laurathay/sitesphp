<?php
include "config.php";

$menu_a_afficher = unMenu($_GET["menuAAfficher"]); //il est ou ce menuAAfficher??? 

include PATH_TEMPLATE . "page_menu_du_jour.php";
