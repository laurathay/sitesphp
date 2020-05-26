<?php
include "config.php";
include "contenu.php";


if (isset($contenuSite["menus"][$_GET["menuChoisi"]])){

  $menu_a_afficher = $contenuSite["menus"][$_GET("menuChoisi")]; 
  include $_dossier_template . "page_menu_du_jour.php";
} else{
  header("Location: $_url_base");
  exit();
}
