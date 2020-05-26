<?php

include "config.php";
include "contenu.php";

if (isset($contenuSite[$_GET["artisteChoisi"]])){
  $artiste = $contenuSite[$_GET("artisteChoisi")];
  include $_dossier_template . "artisteDEtail.php";
}
else{
  header("Location: $_url_base");
  exit();
}
